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
  <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('public/assets/img/favicon/apple-icon-57x57.png') }}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('public/assets/img/favicon/apple-icon-60x60.png') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('public/assets/img/favicon/apple-icon-72x72.png') }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/assets/img/favicon/apple-icon-76x76.png') }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('public/assets/img/favicon/apple-icon-114x114.png') }}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('public/assets/img/favicon/apple-icon-120x120.png') }}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('public/assets/img/favicon/apple-icon-144x144.png') }}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('public/assets/img/favicon/apple-icon-152x152.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/assets/img/favicon/apple-icon-180x180.png') }}">
  <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('public/assets/img/favicon/android-icon-192x192.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/assets/img/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('public/assets/img/favicon/favicon-96x96.png') }}">
  <link rel="shortcut icon" type="image/png" sizes="16x16" href="{{ asset('public/assets/img/favicon/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('public/assets/img/favicon/manifest.json') }}">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{{ asset('public/assets/img/favicon/ms-icon-144x144.png') }}">
  <meta name="theme-color" content="#ffffff">
  <title>UrCorp | Diseñamos páginas web e imagen corporativa para tu empresa</title>

  <!-- OPEN [META TAGS] -->
  <meta name="description" content="Creamos páginas web pensando en las necesidades de tu negocio, con una gran calidad en diseño 100% adaptables a dispositivos móviles, desarrollamos plataformas de comercio electrónico, marketing dígital e imagen corporativa, todo para tu negocio.">
  <meta name="keywords" content="Páginas web, Páginas web en Querétaro, Aplicaciones web y móviles, E-Commerce, Diseño gráfico, Imagen Corporativa, Negocios, SEO, UrCorp">
  <!-- END [META TAGS] -->

  <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/bootstrap.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/animate.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/hover.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/jquery.loading.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css') }}">
</head>
<body data-spy="scroll" data-origin="{{ asset('') }}">
  <nav id="main-navbar" class="app-navbar navbar navbar-default navbar-fixed-top">
    <div class="container-fluid"> 
      <div class="navbar-header">
        <button type="button" id="btn-collapse-navbar" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-m1" aria-expanded="false">
        <div id="navbar-collapsed-icon-bar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </div>
        <div id="navbar-collapsed-icon-close" style="display:none;"> <span class="glyphicon glyphicon-remove navbar-icon-close animated rotateIn"></span> </div>
        </button>
        <a class="navbar-brand app-navbar-brand" href="{{ URL::to('/') }}"><img alt="Logotipo UrCorp" id="logo-navbar" style="display:none;" src="{{ asset('public/assets/img/logo_transparente.png') }}" class="app-logo-navbar"></a> </div>
      <div class="collapse navbar-collapse" id="bs-navbar-collapse-m1"> 
        <ul class="nav navbar-nav navbar-right">
          <li><a class="anchorLink hide" href="#inicio" hreflang="es">Inicio</a></li>
          <li><a class="anchorLink" href="#quienesomos" hreflang="es">¿Quiénes somos?</a></li>
          <li><a class="anchorLink" href="#servicios" hreflang="es">Servicios</a></li>
          <li><a class="anchorLink" href="#clientes" hreflang="es">Clientes</a></li>
          <li><a class="anchorLink" href="#contacto" hreflang="es">Contacto</a></li>
          <li class="divisor-vertical">|</li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle app-navbar-language" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ES</a>
            <ul class="dropdown-menu">
              <li><a href="#" hreflang="es"><img alt="Español" src="{{ asset('public/assets/img/lang/es_mx.png') }}">&nbsp;&nbsp;Español (MX) </a></li>
              <li><a href="#" hreflang="en"><img alt="English" src="{{ asset('public/assets/img/lang/en_usa.png') }}">&nbsp;&nbsp;Inglés (USA)</a></li>
            </ul>
          </li>
        </ul>
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
            <a href="mailto:contacto@urcorp.mx" hreflang="es">contacto@urcorp.mx</a>
          </div>
          <div class="col-xs-12 col-md-12 redes">
            <a href="#" target="__blank">
              <div class="icon-red icon-tw"></div>
            </a>
            <a href="https://www.facebook.com/urcorpmx" hreflang="es" target="__blank">
              <div class="icon-red icon-fb"></div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-12 links">
        <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <h3> Nuestra app </h3>
          <a href="{{ URL::to('/calculator') }}">Cotiza tu idea</a>
          <h3> Portafolio </h3>
          <a href="#" hreflang="es"> Páginas web </a>
          <a href="#" hreflang="es"> Aplicaciones </a>
          <a href="#" hreflang="es"> Imagen corporativa </a>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <!-- Something -->
        </div>
        <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
        </div>  
      </div>
      <div class="col-xs-12 col-md-12">
        <div class="clean-for-navbar"></div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="{{ asset('public/assets/js/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ asset('public/assets/js/jquery.loading.js')}}"></script>
  <script type="text/javascript" src="{{ asset('public/assets/js/jquery.validate.js') }}"></script>
  <script type="text/javascript" src="{{ asset('public/assets/js/bootstrap.js') }}"></script>
  <script type="text/javascript" src="{{ asset('public/assets/js/jquery.scrollspy.js') }}"></script>
  <script type="text/javascript" src="{{ asset('public/assets/js/jquery.anchor.js') }}"></script>
  <script type="text/javascript" src="{{ asset('public/assets/js/app/generic.js') }}"></script>
  @if (!empty($controller) && !empty($view) && File::exists('public/assets/js/app/'.$controller.'.'.$view.'.js'))
    <script type="text/javascript" src="{{ asset('public/assets/js/app/'.$controller.'.'.$view.'.js') }}"></script>
  @endif

<script type="text/javascript">
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-78394522-1', 'auto');
ga('send', 'pageview');
</script>

</body>
</html>