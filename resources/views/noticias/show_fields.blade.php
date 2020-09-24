<!-- Titulo Field -->
<div class="form-group">
    {!! Form::label('titulo', 'Titulo:') !!}
    <p>{{ $noticia->titulo }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $noticia->descripcion }}</p>
</div>

<!-- Imagen Field -->
<div class="form-group">
    {!! Form::label('imagen', 'Imagen:') !!}
    <p><img style= "width:100px  "src="{{$noticia->imagen}}" alt=""></p>
</div>

<!-- Enlace Fuente Field -->
<div class="form-group">
    {!! Form::label('enlace_fuente', 'Enlace Fuente:') !!}
    <p>{{ $noticia->enlace_fuente }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $noticia->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $noticia->updated_at }}</p>
</div>

