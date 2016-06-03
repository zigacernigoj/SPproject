<div class="input-group">
    <span class="input-group-addon">length</span>
    {!! Form::text('length', $reservation->length, ['class'=>'form-control', 'readonly']) !!}
    {{-- name, defaults, selected, additionals --}}
</div>

<br/>


<div class="input-group">
    <span class="input-group-addon">način plačila</span>
    {!! Form::text('payment', $reservation->payment, ['class'=>'form-control', 'readonly']) !!}
    {{-- name, defaults, selected, additionals --}}
</div>

<br/>

<div class="input-group">
    <span class="input-group-addon">program</span>
    {!! Form::text('program_id', $reservation->program_id, ['class'=>'form-control', 'readonly']) !!}
    {{-- name, defaults, selected, additionals --}}
</div>

<br/>

<div class="input-group">
    <span class="input-group-addon">Preklic</span>
    {!! Form::select('canceled', $reservation->getCancel(), null, ['id'=>'cancel_list', 'class'=>'form-control']) !!}
    {{-- name, defaults, selected, additionals --}}
</div>

<br/>

<div class="input-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>