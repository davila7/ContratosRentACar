$(document).ready(function ($){

  yepnope({
  test : $('html').hasClass('js'),
  yep  : [ 
    '/assets/js/functions/utilities.js',
    '/assets/js/functions/main.js'
    ] 
  });

  yepnope({
  test : $('body').hasClass('start-joycott'),
  yep  : [
    // JS
    '/assets/js/plugins/jquery.form.min.js',      
    '/assets/js/plugins/jquery.ui.js',  
    '/assets/js/functions/start_joycott.js',
    // CSS_LAST
    '/assets/css/jquery-ui-1.8.22.custom.css'
    ] 
  });
 });
