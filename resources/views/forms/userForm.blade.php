<div class="input-group">
    <span class="input-group-addon">Ime:</span>
    {!! Form::text('firstName', null, ['class'=>'form-control']) !!}
    {{-- zakaj ne bi kar tega ... , 'pattern'=>"[0-9a-zA-Z]{3,}", 'title'=>"naslov dolzine 3", 'required'=>"required" --}}
</div>

<br/>

<div class="input-group">
    <span class="input-group-addon">Priimek:</span>
    {!! Form::text('lastName', null, ['class'=>'form-control']) !!}
    {{-- zakaj ne bi kar tega ... , 'pattern'=>"[0-9a-zA-Z]{3,}", 'title'=>"naslov dolzine 3", 'required'=>"required" --}}
</div>

<br/>

<div class="input-group">
    <span class="input-group-addon">spol</span>
    {!! Form::select('gender', $user->getGender(), null, ['id'=>'gender_list', 'class'=>'form-control']) !!}
    {{-- name, defaults, selected, additionals --}}
</div>

<br/>

<div class="input-group">
    <span class="input-group-addon">Datum rojstva:</span>
    {!! Form::input('date', 'birthDate', $user->birthDate->format('Y-m-d'), ['class'=>'form-control']) !!}
</div>

<br/>


<div class="input-group">
    <span class="input-group-addon">Alergije:</span>
    {!! Form::textarea('allergies', null, ['class'=>'form-control', 'rows'=>'4']) !!}
    {{-- zakaj ne bi kar tega ... , 'required'=>'required' --}}
</div>

<br/>

<div class="input-group">
    <span class="input-group-addon">bolezni:</span>
    {!! Form::textarea('diseases', null, ['class'=>'form-control', 'rows'=>'4']) !!}
    {{-- zakaj ne bi kar tega ... , 'required'=>'required' --}}
</div>

<br/>

<div class="input-group">
    <span class="input-group-addon">zdravila:</span>
    {!! Form::textarea('medications', null, ['class'=>'form-control', 'rows'=>'4']) !!}
    {{-- zakaj ne bi kar tega ... , 'required'=>'required' --}}
</div>

<br/>

<div class="input-group">
    <span class="input-group-addon">Ostale zdravstvene opombe:</span>
    {!! Form::textarea('otherHealth', null, ['class'=>'form-control', 'rows'=>'4']) !!}
    {{-- zakaj ne bi kar tega ... , 'required'=>'required' --}}
</div>

<br/>

<div class="input-group">
    <span class="input-group-addon">Tel št</span>
    {!! Form::text('phoneNumber', null, ['class'=>'form-control']) !!}
    {{-- zakaj ne bi kar tega ... , 'pattern'=>"[0-9a-zA-Z]{3,}", 'title'=>"naslov dolzine 3", 'required'=>"required" --}}
</div>

<br/>

<div class="input-group">
    <span class="input-group-addon">Naslov:</span>
    {!! Form::text('address', null, ['class'=>'form-control']) !!}
    {{-- zakaj ne bi kar tega ... , 'pattern'=>"[0-9a-zA-Z]{3,}", 'title'=>"naslov dolzine 3", 'required'=>"required" --}}
</div>

<br/>

<div class="input-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>