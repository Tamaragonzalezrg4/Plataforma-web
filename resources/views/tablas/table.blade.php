<div class="table-responsive">
    <table class="table" id="tablas-table">
        <thead>
            <tr>
                <th>Femenino</th>
        <th>Masculino</th>
        <th>Ambos</th>
        <th>Otro</th>
        <th>Encarnacion</th>
        <th>Cambyreta</th>
        <th>Coronel Bogado</th>
        <th>Capitan Mirando</th>
        <th>Positivo</th>
        <th>Negativo</th>
        <th>Recuperado</th>
        <th>Fallecido</th>
        <th>Inconcluso</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tablas as $tabla)
            <tr>
                <td>{{ $tabla->femenino }}</td>
            <td>{{ $tabla->masculino }}</td>
            <td>{{ $tabla->ambos }}</td>
            <td>{{ $tabla->otro }}</td>
            <td>{{ $tabla->encarnacion }}</td>
            <td>{{ $tabla->cambyreta }}</td>
            <td>{{ $tabla->coronel_bogado }}</td>
            <td>{{ $tabla->capitan_mirando }}</td>
            <td>{{ $tabla->positivo }}</td>
            <td>{{ $tabla->negativo }}</td>
            <td>{{ $tabla->recuperado }}</td>
            <td>{{ $tabla->fallecido }}</td>
            <td>{{ $tabla->inconcluso }}</td>
                <td>
                    {!! Form::open(['route' => ['tablas.destroy', $tabla->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tablas.show', [$tabla->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tablas.edit', [$tabla->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
