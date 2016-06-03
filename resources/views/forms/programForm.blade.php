<div class="input-group">
    <span class="input-group-addon">Ime:</span>
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
    {{-- zakaj ne bi kar tega ... , 'pattern'=>"[0-9a-zA-Z]{3,}", 'title'=>"naslov dolzine 3", 'required'=>"required" --}}
</div>

<br/>

<div class="input-group">
    <span class="input-group-addon">Opis:</span>
    {!! Form::textarea('description', null, ['class'=>'form-control', 'rows'=>'4']) !!}
    {{-- zakaj ne bi kar tega ... , 'required'=>'required' --}}
</div>

<br/>

<div class="input-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>