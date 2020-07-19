<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/customColors.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/index.css"  media="screen,projection"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Formulario</title>
</head>

<body>
  <!-- <video src="img/video.mp4" id="vidFondo"></video> -->

  <div class="contenedor">
    <div class="card rowTitulo">
      <h1>Bienes Intelcost</h1>
    </div>
    <div class="colFiltros">
      <form action="/buscar" method="get" id="formulario">
        <div class="filtrosContenido">
          <div class="tituloFiltros">
            <h5>Filtros</h5>
          </div>
          <div class="filtroCiudad input-field">
            <p><label for="selectCiudad">Ciudad:</label><br></p>
            <select name="ciudad" id="selectCiudad">
              <option value="" selected>Elige una ciudad</option>
                @foreach($citys as $city)
                  <option value={{ $city->id }}>{{ $city->name }}</option>
                @endforeach
            </select>
          </div>
          <div class="filtroTipo input-field">
            <p><label for="selecTipo">Tipo:</label></p>
            <br>
            <select name="tipo" id="selectTipo">
              <option value="">Elige un tipo</option>
                @foreach($types as $type)
                  <option value={{ $type->id }}>{{ $type->name }}</option>
                @endforeach
            </select>
          </div>
          <div class="filtroPrecio">
            <label for="rangoPrecio">Precio:</label>
            <input type="text" id="rangoPrecio" name="precio" value="" />
          </div>
          <div class="botonField">
            <input type="submit" class="btn white" value="Buscar" id="submitButton">
          </div>
        </div>
      </form>
    </div>
    <div id="tabs" style="width: 75%;">
      <ul>
        <li><a href="#tabs-1">Bienes disponibles</a></li>
        <li><a href="#tabs-2">Mis bienes</a></li>
      </ul>
      <div id="tabs-1">
        <div class="colContenido" id="divResultadosBusqueda">
          <div class="tituloContenido card">
            @foreach($propertys as $property)
            <div>
              <img src="img/home.jpg" alt="" height="190px">
            </div>
            <div style="margin-left: 50px;">
              <ul>
                <li>Dirección: {{ $property->direction }}</li>
                <li>Ciudad: @foreach($property->city as $val1)
                              {{ $val1->name }}
                            @endforeach
                </li>
                <li>Telefono: {{ $property->phone }}</li>
                <li>Codigo postal: {{ $property->code }}</li>
                <li>Tipo: @foreach($property->type as $val1)
                            {{ $val1->name }}
                          @endforeach
                </li>
                <li>Precio: {{ $property->price }}</li>
                <form class="formee" method="post" action="{{ route('home.store') }}">
                  <input value={{ $property->id }} id="info{{ $property->id }}" class="info" type="hidden" />
                  <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                  <input id="guardar-{{ $property->id }}" class="btn capturar right inputnew" type="submit" title="Send" value="Guardar"/>
                </form>
              </ul>
            </div>
            @endforeach
            <div class="divider">
            </div>
          </div>
        </div>
      </div>
      
      <div id="tabs-2" >
        <div class="colContenido" id="divResultadosBusqueda">
          <div class="tituloContenido card">
            @foreach($landlords as $landlord)
            <div>
              <img src="img/home.jpg" alt="" height="190px">
            </div>
            <div style="margin-left: 50px;">
              <ul>
                @foreach($landlord->property as $val1)
                  <li>Dirección:{{ $val1->direction }}</li>
                  @foreach($val1->city as $val2)
                    <li>Ciudad:{{ $val2->name }}</li>
                  @endforeach
                  <li>Telefono: {{ $val1->phone }}</li>
                  <li>Codigo postal: {{ $val1->code }}</li>
                  @foreach($val1->type as $val3)
                    <li>Ciudad:{{ $val3->name }}</li>
                  @endforeach
                  <li>Precio: {{ $val1->price }}</li>
                  @endforeach
              </ul>
            </div>
            @endforeach
            <div class="divider"></div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/buscador.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript">
      $( document ).ready(function() {
          $( "#tabs" ).tabs();
      });
    </script>
  </body>
  </html>
