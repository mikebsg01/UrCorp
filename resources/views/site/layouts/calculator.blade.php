<!--
  00000     00000 000 000 0000  0000000
  000000   000000 000 000 000   000
  000 000 000 000 000 000000    000000
  000   000   000 000 000 000   000
  000         000 000 000 00000 0000000

  ======= [Software Developer] ========

  E-mail: mikebsg01@gmail.com
  Author: Michael Serrato
-->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="57x57" href="{!! asset('public/assets/img/favicon/apple-icon-57x57.png') !!}">
  <link rel="apple-touch-icon" sizes="60x60" href="{!! asset('public/assets/img/favicon/apple-icon-60x60.png') !!}">
  <link rel="apple-touch-icon" sizes="72x72" href="{!! asset('public/assets/img/favicon/apple-icon-72x72.png') !!}">
  <link rel="apple-touch-icon" sizes="76x76" href="{!! asset('public/assets/img/favicon/apple-icon-76x76.png') !!}">
  <link rel="apple-touch-icon" sizes="114x114" href="{!! asset('public/assets/img/favicon/apple-icon-114x114.png') !!}">
  <link rel="apple-touch-icon" sizes="120x120" href="{!! asset('public/assets/img/favicon/apple-icon-120x120.png') !!}">
  <link rel="apple-touch-icon" sizes="144x144" href="{!! asset('public/assets/img/favicon/apple-icon-144x144.png') !!}">
  <link rel="apple-touch-icon" sizes="152x152" href="{!! asset('public/assets/img/favicon/apple-icon-152x152.png') !!}">
  <link rel="apple-touch-icon" sizes="180x180" href="{!! asset('public/assets/img/favicon/apple-icon-180x180.png') !!}">
  <link rel="icon" type="image/png" sizes="192x192"  href="{!! asset('public/assets/img/favicon/android-icon-192x192.png') !!}">
  <link rel="icon" type="image/png" sizes="32x32" href="{!! asset('public/assets/img/favicon/favicon-32x32.png') !!}">
  <link rel="icon" type="image/png" sizes="96x96" href="{!! asset('public/assets/img/favicon/favicon-96x96.png') !!}">
  <link rel="shortcut icon" type="image/png" sizes="16x16" href="{!! asset('public/assets/img/favicon/favicon-16x16.png') !!}">
  <link rel="manifest" href="{!! asset('public/assets/img/favicon/manifest.json') !!}">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{!! asset('public/assets/img/favicon/ms-icon-144x144.png') !!}">
  <meta name="theme-color" content="#ffffff">
  <title>URCorp</title>
  <link rel="stylesheet" type="text/css" href="{!! asset('public/assets/css/bootstrap.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('public/assets/css/font-awesome.min.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('public/assets/css/animate.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('public/assets/css/hover.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('public/assets/css/jquery.loading.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('public/assets/css/style.css') !!}">
</head>
<body data-spy="scroll" data-origin="{!! URL::to('/') !!}">
    <!-- Static navbar -->
  <nav class="navbar navbar-inverse not-border-radius app-bg-black-1">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand not-padding" href="{!! URL::to('/') !!}">
          <div class="bg-logo logo-navbar"></div>
        </a>
      </div>
    </div>
  </nav>
  @yield('content')
  <div class="container-fluid app-bg-black-1" data-adjust-style="true" data-styles="min-height:100" id="under"> 
    <div class="row app-footer">
      <div class="col-xs-12 col-md-12">
        <div class="clean-for-navbar"></div>
      </div>
      <div class="col-xs-12 col-md-12 social">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <h3> UrCorp<sup>&copy;</sup> </h3>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="col-xs-12 col-md-12 mail">
            <a href="#">contacto@urcorp.mx</a>
          </div>
          <div class="col-xs-12 col-md-12 redes">
            <div class="icon-red icon-tw"></div>
            <div class="icon-red icon-fb"></div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-12 links">
        <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <h3> Portafolio </h3>
          <a href="#"> Páginas web </a>
          <a href="#"> Aplicaciones </a>
          <a href="#"> Imagen corporativa </a> 
          <a href="#"> Oferta exportable </a> 
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <h3> Plataforma de Negocios </h3>
          <a href="#"> AEM Querétaro </a>
        </div>
        <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
        </div>  
      </div>
      <div class="col-xs-12 col-md-12">
        <div class="clean-for-navbar"></div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="{!! asset('public/assets/js/jquery.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('/public/assets/js/turbolinks.min.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('/public/assets/js/jquery.turbolinks.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('/public/assets/js/defiant.min.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('public/assets/js/jquery.loading.js')!!}"></script>
  <script type="text/javascript" src="{!! asset('public/assets/js/jquery.validate.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('public/assets/js/bootstrap.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('public/assets/js/jquery.scrollspy.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('public/assets/js/jquery.anchor.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('public/assets/js/app/generic.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('public/assets/js/app/calculator.js') !!}"></script>
  @if (!empty($controller) && !empty($view) && File::exists('public/assets/js/app/'.$controller.'.'.$view.'.js'))
    <script type="text/javascript" src="{!! asset('public/assets/js/app/'.$controller.'.'.$view.'.js') !!}"></script>
  @endif
</body>
</html>