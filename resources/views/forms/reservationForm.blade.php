<div class="input-group">
    <span class="input-group-addon">dolžina</span>
    {!! Form::select('length', $reservation->getLength(), null, ['id'=>'length_list', 'class'=>'form-control']) !!}
    {{-- name, defaults, selected, additionals --}}
</div>

<br/>

<div class="input-group">
    <span class="input-group-addon">način plačila</span>
    {!! Form::select('payment', $reservation->getPayment(), null, ['id'=>'payment_list', 'class'=>'form-control']) !!}
    {{-- zakaj ne bi kar tega ... , 'pattern'=>"[0-9a-zA-Z]{3,}", 'title'=>"naslov dolzine 3", 'required'=>"required" --}}
</div>

<br/>


<div class="input-group">
    <span class="input-group-addon">program</span>
    {!! Form::select('program_id', $programs, null, ['id'=>'program_list', 'class'=>'form-control']) !!}
    {{-- name, defaults, selected, additionals --}}
</div>

<br/>

<div class="input-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>