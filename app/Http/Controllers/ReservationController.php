<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Program;
use App\Reservation;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ReservationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

//        $this->middleware('App\Http\Middleware\RedirectIfNotAManager', ['only'=>['index', 'edit']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if( Auth::user()->isAManager() || Auth::user()->isAnAdmin() ) {
            $reservations = Reservation::all();
        }
        else{
            $reservations = Auth::user()->reservations;
            //dd($reservations);
        }

        return view('reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programs = Program::lists('name', 'id');
        return view('reservations.create', compact('programs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationRequest $request)
    {
        //dd($request->program_id);
        $this->createReservation($request);
        flash()->overlay('rezervacija uspešna');
        Log::info('uporabnik ' . Auth::user()->username . ' je ustvaril rezervacijo ' . $request->id);
        return redirect('reservations');
    }

    public function createReservation(ReservationRequest $request){
        $reservation = Auth::user()->reservations()->create($request->all());
        return $reservation;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        if( Auth::user()->id != $reservation->user_id && !(Auth::user()->isAManager() || Auth::user()->isAnAdmin())){
            Log::warning('uporabnik ' . Auth::user()->username . ' nepooblaščeno dostopa do rezervacije ' . $reservation->id);
            return redirect('/');
        }

        return view('reservations.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        if( Auth::user()->id != $reservation->user_id && !(Auth::user()->isAManager() || Auth::user()->isAnAdmin())){
            Log::warning('uporabnik ' . Auth::user()->username . ' nepooblaščeno dostopa do forme za posodabljanje rezervacije ' . $reservation->id);
            return redirect('/');
        }

        return view('reservations.edit', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReservationRequest $request, Reservation $reservation)
    {
        if( Auth::user()->id != $reservation->user_id && !(Auth::user()->isAManager() || Auth::user()->isAnAdmin())){
            Log::warning('uporabnik ' . Auth::user()->username . ' nepooblaščeno dostopa do metode za posododabljanje rezervacije ' . $reservation->id);
            return redirect('/');
        }

        $reservation->update($request->all());
        Log::info('uporabnik ' . Auth::user()->username . ' je preklical rezervacijo ' . $request->id);
        return redirect('reservations');
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


    public function oneUser(User $user){

        if( Auth::user()->id != $user->id && !(Auth::user()->isAManager() || Auth::user()->isAnAdmin())){
            Log::warning('uporabnik ' . Auth::user()->username . ' nepooblaščeno dostopa do rezervacij uporabnika ' . $user->username);
            return redirect('/');
        }

        $reservations =  $user->reservations;
        return view('reservations.index', compact('reservations'));
    }
}
