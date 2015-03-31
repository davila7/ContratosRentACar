<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"/> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><html lang="en" class="no-js"><![endif]-->
<html>
<head>
<title>Rentacar @if (Auth::check()) | {{Auth::user()->usuario}} @endif</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="author" content="Davila">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
  <!-- JS -->
  
  {{ HTML::script('js/lib/jquery.js') }}
  {{ HTML::script('js/lib/jquery-ui.min.js') }}
  {{ HTML::script('js/lib/jquery.validate.js') }}
  {{ HTML::script('js/lib/additional-methods.min.js') }}
  {{ HTML::script('js/functions/index.js') }}
  {{ HTML::script('js/lib/underscore.js') }}
  {{ HTML::script('js/lib/bootstrap.js') }}
  {{ HTML::script('js/lib/jasny-bootstrap.min.js') }}
  {{ HTML::script('js/lib/bootstrap-datepicker.js') }}
  {{ HTML::script('js/lib/bootstrap-fileupload.js') }}
  {{ HTML::script('js/lib/jquery.signaturepad.min.js') }}
  {{ HTML::script('js/lib/json2.min.js') }}

  <!-- CSS -->
  {{ HTML::style('css/jasny-bootstrap.min.css'); }}
  {{ HTML::style('css/jquery.signaturepad.css'); }}
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
  {{ HTML::script('js/functions/general.js') }}
  @yield('head')
</head>
    <body>
      <input type="hidden" id="baseurl" value="{{ URL::to('/');}}" />
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>