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
  {{ HTML::script('js/functions/indexcma.js') }}
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

</head>
<body>
  <!--[if lt IE 7]>
  <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->
<main id="content" role="main">
    <div class="container container-view">
      <div class="row">
      <div class="col-lg-12 col-lg-offset-4">
        <div class="col-lg-3">
          <p class="bg-success">Iniciar Sesión</p>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Ingresar email">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Ingresar Password">
          </div>
          <button type="button" id="login" class="btn btn-default">Submit</button>
        <div class="alert alert-danger hide" id="alert-login" role="alert">Usuario y contraseña incorrecto. Vuelva a intentarlo</div>
      </div>
      </div>
    </div>
    </div>
    <input type="hidden" id="usuario_id" value="@if (Auth::check()) {{Auth::user()->id}} @endif" />
    <input type="hidden" id="baseurl" value="{{ URL::to('/');}}" />
    <input type="hidden" id="isLoggin" value="false" />
</main>
    </body>
</html>