@extends('layout.app')

@section('contenido')
<div class="container mt-4">
    <div class="d-flex gap-2 mb-3">
        <a href="{{ url('turismos/mapa') }}" class="btn btn-success">
            Ver mapa Global
        </a>
        <a href="{{ route('turismos.create') }}" class="btn btn-primary" >
            <i class="fas fa-user-plus me-1"></i> Agregar punto
        </a>
    </div>


    <table class="table table-bordered table-striped" id="tabla">
        <thead class="table-dark">
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>descripcion</th>
                <th>categoria</th>
                <th>imagen</th>
                <th>latitud</th>
                <th>longitud</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($turismos as $turismotemp)
            <tr>
                <td>{{ $turismotemp->id }}</td>
                <td>{{ $turismotemp->nombre }}</td>
                <td>{{ $turismotemp->descripcion }}</td>
                <td>{{ $turismotemp->categoria }}</td>
                <td>
                    @if($turismotemp->imagen && $turismotemp->imagen !== 'sin imagen')
                        <img src="{{ asset('storage/' . $turismotemp->imagen) }}" alt="Imagen Punto turistico" width="100" height="80" style="object-fit: cover;">
                    @else
                        <span>No hay imagen</span>
                    @endif
                </td>
                <td>{{ $turismotemp->latitud }}</td>
                <td>{{ $turismotemp->longitud }}</td>
                <td>
                    <div class="d-flex justify-content-center gap-2">
                        <a href="{{ route('turismos.edit', $turismotemp->id) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i> Editar
                        </a>

                    <form action="{{ route('turismos.destroy', $turismotemp->id) }}" method="POST" class="formEliminar">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash-alt"></i> Eliminar
                        </button>
                    </form>

                    </div>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- Confirmación con SweetAlert -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const formularios = document.querySelectorAll('.formEliminar');

    formularios.forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            Swal.fire({
                title: "¿Estás seguro?",
                text: "Una vez eliminado no se puede recuperar",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, eliminar",
                cancelButtonText: "Cancelar"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); 
                }
            });
        });
    });
});
</script>
<script>
    $('#tabla').DataTable({
        dom: "<'d-flex justify-content-between align-items-center mb-3'Bf>rtip",
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json'
        },
        buttons: [
            {
                extend: 'print',
                text: 'Imprimir',
                className: 'btn btn-sm btn-primary',
                exportOptions: {
                    columns: [0,1,2,3,5,6]
                }
            },
            {
                extend: 'excel',
                text: 'Exportar Excel',
                className: 'btn btn-sm btn-primary',
                exportOptions: {
                    columns: [0,1,2,3,5,6]
                }
            },
            {
                extend: 'pdf',
                text: 'Exportar PDF',
                className: 'btn btn-sm btn-primary',
                exportOptions: {
                    columns: [0,1,2,3,5,6]
                }
            }
        ]
    });

</script>

@endsection
