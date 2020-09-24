<div class="table-responsive">
    <table class="table" id="data-table">
        <thead>
            <tr>
                <th>Titulo</th>
        <th>Descripcion</th>
        <th>Imagen</th>
        <th>Enlace Fuente</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($noticias as $noticia)
            <tr>
                <td>{{ $noticia->titulo }}</td>
            <td>{{ $noticia->descripcion }}</td>
              <td><img style= "width:100px  "src="{{$noticia->imagen}}" alt=""> </td>
            <td>{{ $noticia->enlace_fuente }}</td>
                <td>
                    {!! Form::open(['route' => ['noticias.destroy', $noticia->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('noticias.show', [$noticia->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('noticias.edit', [$noticia->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
