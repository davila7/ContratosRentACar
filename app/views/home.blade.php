<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"/> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><html lang="en" class="no-js"><![endif]-->
<!-- AGREGANDO EL MODULO APP (ANGULARJS) -->
<html>
<head>
<title>PANEL DE CONTROL @if (Auth::check()) | {{Auth::user()->usuario}} @endif</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="author" content="Davila">
<meta property="og:title" content=""/>
<meta property="og:image" content=""/>
<meta property="og:description" content=""/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
  <!-- JS -->
  {{ HTML::script('js/lib/jquery.js') }}
    {{ HTML::script('js/page/home.js') }}
  {{ HTML::script('js/lib/underscore.js') }}
  {{ HTML::script('js/lib/bootstrap.js') }}
  {{ HTML::script('js/lib/jasny-bootstrap.min.js') }}
  {{ HTML::script('js/lib/bootstrap-datepicker.js') }}
  {{ HTML::script('js/lib/bootstrap-fileupload.js') }}


  <!-- CSS -->
  {{ HTML::style('css/jasny-bootstrap.min.css'); }}
  {{ HTML::style('css/marker.css'); }}
  {{ HTML::style('css/font-awesome-4.2.0/css/font-awesome.css'); }}
  <!--{{ HTML::style('css/jquery.mobile.css'); }}-->
  {{ HTML::style('css/home.css'); }}
  {{ HTML::style('css/bootstrap.css'); }}
  {{ HTML::style('css/docs.min.css'); }}
  {{ HTML::style('css/datepicker.css'); }}
  {{ HTML::style('css/bootstrap-responsive.css'); }}
  {{ HTML::style('css/bootstrap-fileupload.css'); }}

<!-- script especiales -->
  {{ HTML::script('js/yepnope.js') }}
  {{ HTML::script('js/rulesJS.js') }}
</head>
<body>
  <!--[if lt IE 7]>
  <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->
  <!-- Docs master nav -->
<header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ URL::to('/');}}"> 
     PANEL DE CONTROL
      </a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav navbar-right login-home">
       <li><a class="pointer nav-bar-text">Iniciar Sesión</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right logout-home hide" ng-controller="loginController">
        <li><a class="nav-bar-text" id="username" ></a></li>
        <li><a class="brand"> 
          <img class="avatar img-circle" src="img/avatar-default.jpeg" height="30px" width="30px"></a></li>
          <li>
            <a class="dropdown-toggle pointer" data-toggle="dropdown">
            <img  src="img/glyphicons/png/glyphicons_136_cogwheel.png" height="25px" width="25px"/>
            <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li class="pointer">
                <a class="dropdown-menu-text" id="carga_perfil" ng-click="showModalEditarPerfil()">Editar Perfil</a>
              </li>
              <li class="pointer dropdown-menu-text"><a href="http://www.missing.cl" class="dropdown-menu-text">Más Información</a></li>
              <li class="divider"></li>
              <li><a ng-click="logout()" class="pointer dropdown-menu-text">Cerrar Sesión</a></li>
          </ul>
          </li>
      </ul>
    </nav>
  </div>
</header>
<main id="content" role="main">
    <div class="container container-view">
      <div class="row">
    <div class="col-md-6">
      <a onclick="alert('En contrucción!')" class="btn btn-default" >CEACHEI</a>
    </div>
    <div class="col-md-6">
      {{ HTML::link('indexcma','CMA',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
    </div>
    </div>
    </div>
    <input type="hidden" id="usuario_id" value="@if (Auth::check()) {{Auth::user()->id}} @endif" />
    <input type="hidden" id="baseurl" value="{{ URL::to('/');}}" />
    <input type="hidden" id="isLoggin" value="false" />
</main>
    </body>
</html>