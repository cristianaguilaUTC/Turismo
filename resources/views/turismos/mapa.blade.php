@extends('layout.app')

@section('contenido')

<h1 class="mb-4">Mapa de Clientes</h1>

<!-- Selector de categoría y botones de zoom alineados -->
<div class="d-flex justify-content-between flex-wrap gap-2 align-items-end mb-3">

    <div>
        <label for="categoriaFiltro" class="form-label mb-1"><b>Filtrar por categoría:</b></label>
        <select id="categoriaFiltro" class="form-select" onchange="filtrarPorCategoria()">
            <option value="todas">Todas</option>
            <option value="Reserva ecologica">Reserva ecologica</option>
            <option value="Volcan">Volcan</option>
            <option value="Lago">Lago</option>
            <option value="Museo">Museo</option>
            <option value="Monumento">Monumento</option>
            <option value="Centro cultural">Centro cultural</option>
            <option value="Patrimonio de la humanidad">Patrimonio de la humanidad</option>
            <option value="Iglesia">Iglesia</option>
            <option value="Templo">Templo</option>
            <option value="Catedral">Catedral</option>
            <option value="Zoologico">Zoologico</option>
            <option value="Acuario">Acuario</option>
            <option value="Mirador">Mirador</option>
            <option value="Mercado artesanal">Mercado artesanal</option>
            <option value="feria">feria</option>
            <option value="Sendero">Sendero</option>
            <option value="Otro">Otro</option>
        </select>
    </div>

    <div class="text-end">
        <button type="button" class="btn btn-outline-dark btn-md px-4 py-2 me-2" id="btnZoomIn">
            <i class="fas fa-search-plus me-1"></i> Acercar
        </button>
        <button type="button" class="btn btn-outline-dark btn-md px-4 py-2" id="btnZoomOut">
            <i class="fas fa-search-minus me-1"></i> Alejar
        </button>
    </div>
</div>

<!-- Mapa -->
<div id="mapa-clientes" style="border:2px solid black; height:500px; width: 100%;"></div>

<script type="text/javascript">
    var mapa;
    var marcadores = [];
    var turismos = @json($turismos);
    var publicStorageUrl = "{{ asset('storage') }}";
    function initMap() {
        var centroMapa = new google.maps.LatLng(-0.9374805, -78.6161327);

        mapa = new google.maps.Map(document.getElementById('mapa-clientes'), {
            center: centroMapa,
            zoom: 13,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        cargarMarcadores();

        document.getElementById('btnZoomIn').addEventListener('click', function () {
            mapa.setZoom(mapa.getZoom() + 1);
        });

        document.getElementById('btnZoomOut').addEventListener('click', function () {
            mapa.setZoom(mapa.getZoom() - 1);
        });
    }

    function cargarMarcadores(categoriaSeleccionada = "todas") {
        marcadores.forEach(m => m.setMap(null));
        marcadores = [];

        turismos.forEach(turismo => {
            if (categoriaSeleccionada === "todas" || categoriaSeleccionada === turismo.categoria) {
                let coordenadas = new google.maps.LatLng(turismo.latitud, turismo.longitud);
                let iconUrl = turismo.imagen && turismo.imagen !== 'sin imagen'
                    ? `{{ asset('storage') }}/${turismo.imagen}`
                    : "https://images.icon-icons.com/4132/PNG/96/animal_cute_animals_cartoon_tiger_icon_260622.png";

                var marcador = new google.maps.Marker({
                    position: coordenadas,
                    map: mapa,
                    title:
                        "📍 " + turismo.nombre + "\n" +
                        "🗂 Categoría: " + turismo.categoria + "\n" +
                        "📍 Longitud: " + turismo.longitud+ "\n" +
                        "📍 Latitud: " + turismo.latitud ,
                    icon: turismo.imagen && turismo.imagen !== 'sin imagen'
                        ? {
                            url: iconUrl,
                            scaledSize: new google.maps.Size(64, 64),
                            anchor: new google.maps.Point(32, 64)
                        }
                        : iconUrl,
                    draggable: false
                });

                marcadores.push(marcador);
            }
        });
    }

    function filtrarPorCategoria() {
        let categoria = document.getElementById("categoriaFiltro").value;
        cargarMarcadores(categoria);
    }
</script>

@endsection
