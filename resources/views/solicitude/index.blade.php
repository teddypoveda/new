mostrar la solicitud
<table class="table table-light">

    <thead class="theed-light">
        <tr>
            <th>#</th>
            <th>Presupuesto Solicitado</th>
            <th>Nota credito</th>
            <th>Soporte</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $solicitude as $solicitud)
        <tr>
            <td>{{ $solicitud->id }}</td>
            <td>{{ $solicitud->PresupuestoSolicitado }}</td>
            <td>{{ $solicitud->NotaCredito }}</td>
            <td>{{ $solicitud->Soporte }}</td>
            <td>Editar</td>
        </tr>
        @endforeach
    </tbody>
    
</table>
