<div class="table-responsive">
    <table class="table" id="tCasos-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Descripcion</th>
        <th>Fecha</th>
        <th>C Profesional Id</th>
        <th>T Usuario Id</th>
        <th>C Estado Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tCasos as $tCasos)
            <tr>
                <td>{{ $tCasos->nombre }}</td>
            <td>{{ $tCasos->descripcion }}</td>
            <td>{{ $tCasos->fecha }}</td>
            <td>{{ $tCasos->c_profesional_id }}</td>
            <td>{{ $tCasos->t_usuario_id }}</td>
            <td>{{ $tCasos->c_estado_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['tCasos.destroy', $tCasos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tCasos.show', [$tCasos->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tCasos.edit', [$tCasos->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
