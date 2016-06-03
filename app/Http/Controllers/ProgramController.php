<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProgramRequest;
use App\Program;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ProgramController extends Controller
{
    public function __construct()
    {
        // UBISTVU SAMO MANAGER LAHKO USTVARI/UREDI
        $this->middleware('App\Http\Middleware\RedirectIfNotAManager', ['except'=>['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::paginate(10);
        return view('programs.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Log::info('uporabnik ' . Auth::user()->username . ' zeli ustvariti nov program vadbe');
        return view('programs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgramRequest $request)
    {
        $this->createProgram($request);
        flash()->overlay('program vadbe uspešno shranjen');
        Log::info('uporabnik ' . Auth::user()->username . ' je ustvaril nov program vadbe ' . $request->name);
        return redirect('programs');
    }

    public function createProgram(ProgramRequest $request){
        $program = Program::create($request->all());
        return $program;
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        return view('programs.show', compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        Log::info('uporabnik ' . Auth::user()->username . 'zeli urejati program ' . $program->name);
        return view('programs.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProgramRequest $request, Program $program)
    {
        $program->update($request->all());
        Log::info('uporabnik ' . Auth::user()->username . ' je posodobil program vadbe' . $program->name);
        return redirect('programs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
