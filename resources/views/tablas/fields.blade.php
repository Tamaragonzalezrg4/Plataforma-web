<!-- Femenino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('femenino', 'Femenino:') !!}
    {!! Form::text('femenino', null, ['class' => 'form-control']) !!}
</div>

<!-- Masculino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('masculino', 'Masculino:') !!}
    {!! Form::text('masculino', null, ['class' => 'form-control']) !!}
</div>

<!-- Ambos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ambos', 'Ambos:') !!}
    {!! Form::text('ambos', null, ['class' => 'form-control']) !!}
</div>

<!-- Otro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('otro', 'Otro:') !!}
    {!! Form::text('otro', null, ['class' => 'form-control']) !!}
</div>

<!-- Encarnacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('encarnacion', 'Encarnacion:') !!}
    {!! Form::text('encarnacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Cambyreta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cambyreta', 'Cambyreta:') !!}
    {!! Form::text('cambyreta', null, ['class' => 'form-control']) !!}
</div>

<!-- Coronel Bogado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coronel_bogado', 'Coronel Bogado:') !!}
    {!! Form::text('coronel_bogado', null, ['class' => 'form-control']) !!}
</div>

<!-- Capitan Mirando Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capitan_mirando', 'Capitan Mirando:') !!}
    {!! Form::text('capitan_mirando', null, ['class' => 'form-control']) !!}
</div>

<!-- Positivo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('positivo', 'Positivo:') !!}
    {!! Form::text('positivo', null, ['class' => 'form-control']) !!}
</div>

<!-- Negativo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('negativo', 'Negativo:') !!}
    {!! Form::text('negativo', null, ['class' => 'form-control']) !!}
</div>

<!-- Recuperado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('recuperado', 'Recuperado:') !!}
    {!! Form::text('recuperado', null, ['class' => 'form-control']) !!}
</div>

<!-- Fallecido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fallecido', 'Fallecido:') !!}
    {!! Form::text('fallecido', null, ['class' => 'form-control']) !!}
</div>

<!-- Inconcluso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inconcluso', 'Inconcluso:') !!}
    {!! Form::text('inconcluso', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tablas.index') }}" class="btn btn-default">Cancel</a>
</div>
