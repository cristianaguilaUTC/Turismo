
@extends('layout.app')

@section('contenido')
<div class="container mt-4" style="border: 1px solid black;  border-radius: 15px;">
    <form action="{{ route('turismos.store') }}" id="formNturismo" method="post" enctype="multipart/form-data">
        @csrf
        <br>
        <h2 class="mb-4"><i class="fas fa-user-plus me-2"></i>Registrar un Nuevo Lugar</h2>


        <div class="mb-3">
            <label for="nombre" class="form-label"><b>Nombre:</b></label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label"><b>descripcion:</b></label>
            <input type="text" name="descripcion" id="descripcion" class="form-control">
        </div>

        <div class="mb-3">
            <label for="categoria" class="form-label"><b>Categoría:</b></label>
            <select name="categoria" id="categoria" class="form-select">
                <option value="">Seleccione una categoría</option>
                <option value="Acuario">Acuario</option>
                <option value="Catedral">Catedral</option>
                <option value="Centro cultural">Centro cultural</option>
                <option value="feria">feria</option>
                <option value="Lago">Lago</option> 
                <option value="Iglesia">Iglesia</option>
                <option value="Templo">Templo</option>
                <option value="Patrimonio de la humanidad">Patrimonio de la humanidad</option>
                <option value="Mercado artesanal">Mercado artesanal</option>
                <option value="Mirador">Mirador</option>
                <option value="Monumento">Monumento</option>
                <option value="Museo">Museo</option>
                <option value="Reserva ecologica">Reserva ecologica</option>
                <option value="Sendero">Sendero</option>
                <option value="Volcan">Volcan</option>
                <option value="Zoologico">Zoologico</option>
                <option value="Otro">Otro</option>
            </select>
        </div>

        

        <div class="mb-3">
            <label for="imagen" class="form-label"><b>imagen:</b></label>
            <input type="file" name="imagen" id="imagen" class="form-control">
        </div>

        <div class="mb-3">
            <label for="latitud" class="form-label"><b>latitud:</b></label>
            <input type="text" name="latitud" id="latitud" class="form-control">
        </div>

        <div class="mb-3">
            <label for="longitud" class="form-label"><b>Longitud:</b></label>
            <input type="text" name="longitud" id="longitud" class="form-control">
        </div>

        <div class="mb-4">
            <label class="form-label"><b>Seleccionar ubicación:</b></label>
            <div id="mapa_cliente" style="border:1px solid #black; height:250px; width:100%;" class="rounded"></div>
        </div>

        <div class="text-end">
          <button type="button" class="btn btn-outline-dark btn-md px-4 py-2 me-2" id="btnZoomIn">
              <i class="fas fa-search-plus me-1"></i> Acercar
          </button>
          <button type="button" class="btn btn-outline-dark btn-md px-4 py-2" id="btnZoomOut">
              <i class="fas fa-search-minus me-1"></i> Alejar
          </button>
      </div>

        <button type="submit" class="btn btn-success">
            <i class="fas fa-save me-1"></i>Guardar
        </button>
        <a href="{{ route('turismos.index') }}" class="btn btn-secondary ms-2">
            <i class="fas fa-arrow-left me-1"></i>Cancelar
        </a>
        <br>
        <br>
    </form>
</div>

<script type="text/javascript">
    function initMap() {
        var latitud_longitud = new google.maps.LatLng(-0.9374805, -78.6161327);
        var mapa = new google.maps.Map(document.getElementById('mapa_cliente'), {
            center: latitud_longitud,
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var marcador = new google.maps.Marker({
            position: latitud_longitud,
            map: mapa,
            title: "Seleccione la dirección",
            draggable: true
        });

        google.maps.event.addListener(marcador, 'dragend', function(event) {
            var latitud = this.getPosition().lat();
            var longitud = this.getPosition().lng();
            document.getElementById("latitud").value = latitud;
            document.getElementById("longitud").value = longitud;
        });

        document.getElementById('btnZoomIn').addEventListener('click', () => {
            const zoomActual = mapa.getZoom();
            mapa.setZoom(zoomActual + 1);
        });

        document.getElementById('btnZoomOut').addEventListener('click', () => {
            const zoomActual = mapa.getZoom();
            mapa.setZoom(zoomActual - 1);
        });

    }
</script>
<script>
    $("#formNturismo").validate({
      rules: {
        nombre: {
          required: true,
          minlength: 3,
          maxlength: 40
        },
        imagen:{
          required: true,
        },
        descripcion: {
          required: true,
          minlength: 5,
          maxlength: 80
        },
        categoria: {
          required: true,

        },
        latitud: {
          required: true,
          number: true,
          min: -90,
          max: 90
        },
        longitud: {
          required: true,
          number: true,
          min: -180,
          max: 180
        }
      },
      messages: {
        nombre: {
          required: "Por favor ingresa el nombre",
          minlength: "La cédula debe tener al menos 3 caracteres",
          maxlength: "La cédula no debe superar los 40 caracteres"
        },
        
        imagen:{
          required: "ingrese la imagen",
        },
        descripcion: {
          required: "Por favor ingresa una descripcion",
          minlength: "El apellido debe tener al menos 5 caracteres",
          maxlength: "El apellido no debe superar los 80 caracteres"
        },
        categoria: {
          required: "Por favor ingresa la categoria",

        },
        latitud: {
          required: "Por favor ingresa la latitud",
          number: "La latitud debe ser un número",
          min: "La latitud mínima es -90",
          max: "La latitud máxima es 90"
        },
        longitud: {
          required: "Por favor ingresa la longitud",
          number: "La longitud debe ser un número",
          min: "La longitud mínima es -180",
          max: "La longitud máxima es 180"
        }
      }
    });
  </script>
  <script>
    $("#imagen").fileinput({
        showUpload: false,
        dropZoneEnabled: true,
        showCancel: false,
        theme: "fa",
        allowedFileExtensions: ["jpg", "jpeg", "png", "gif"],
        maxFileSize: 2048, // en KB (2 MB)
        msgPlaceholder: 'Seleccione una imagen...',
        browseLabel: 'Buscar imagen',
        removeLabel: 'Quitar',
        language: 'es'
    });
  </script>

@endsection
