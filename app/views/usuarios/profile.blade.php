@extends('layouts.layout')
@section('head')
@parent
<script type="text/javascript">
	var map;
	$(document).ready(function() {

	$('input[type=file]').bootstrapFileInput();
	
	if(navigator.geolocation) {
    browserSupportFlag = true;
    	navigator.geolocation.getCurrentPosition(function(position) {
      	var currentMapCenter = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
      	map_initialize(currentMapCenter);
    	}, function() {

    	});
  	}
	
	var mapCenter = new google.maps.LatLng(-33.437118,-70.650544); //Google map Coordinates

	
	map_initialize(mapCenter); // initialize google map
	
	//############### Google Map Initialize ##############
	function map_initialize(mapCenter)
	{
			var googleMapOptions = 
			{ 
				center: mapCenter, // map center
				zoom: 17, //zoom level, 0 = earth view to higher value
				maxZoom: 18,
				minZoom: 10,
				zoomControlOptions: {
				style: google.maps.ZoomControlStyle.SMALL //zoom control size
			},
				scaleControl: true, // enable scale control
				mapTypeId: google.maps.MapTypeId.ROADMAP // google map type
			};
		
		   	map = new google.maps.Map(document.getElementById("google_map"), googleMapOptions);			
			
			//Load Markers from the XML File, Check (map_process.php)
			$.get("{{ URL::to('objetos'); }}", function (data) {
				$(data).find("marker").each(function () {
					  var name 		= $(this).attr('name');
					  var address 	= '<p>'+ $(this).attr('address') +'</p>';
					  var type 		= $(this).attr('type');
					  var path      =  $(this).attr('path');
					  var point 	= new google.maps.LatLng(parseFloat($(this).attr('lat')),parseFloat($(this).attr('lng')));
					  create_marker(point, name, path, address, false, false, false, "{{ asset('img/pin_blue.png') }}");
				});
			});	
			
			//Right Click to Drop a New Marker
			google.maps.event.addListener(map, 'rightclick', function(event) {
				//Edit form to be displayed with new marker
				var EditForm = '<p><div class="marker-edit">'+
				'<form action="ajax-save.php" method="POST" name="SaveMarker" id="SaveMarker">'+
				'<label for="pName"><span>Nombre :</span><input type="text" name="pName" class="save-name" placeholder="Ingresar Nombre" maxlength="40" /></label>'+
				'<label for="pDesc"><span>Descripci&oacute;n :</span><textarea name="pDesc" class="save-desc" placeholder="Ingresar Descripci&oacute;n" maxlength="150"></textarea></label>'+
				'<label for="pType"><span>Tipo :</span> <select name="pType" class="save-type"><option value="1">Objeto</option><option value="2">Animal</option><option value="3">Persona</option>'+
				'</select></label>'+
				'<label for="pImage"><span>Imagen :</span><input type="file" class="save-image" data-filename-placement="inside"></label>'+
				'</form>'+
				'</div></p><button name="save-marker" class="save-marker">Save Marker Details</button>';

				//Drop a new Marker with our Edit Form
				create_marker(event.latLng, 'Datos perdida', EditForm, true, true, true, "{{ asset('img/pin_green.png') }}");
			});
										
	}


	
	
	
	//############### Create Marker Function ##############
	function create_marker(MapPos, MapTitle, MapPath,  MapDesc,  InfoOpenDefault, DragAble, Removable, iconPath)
	{	  	  		  
		
		//new marker
		var marker = new google.maps.Marker({
			position: MapPos,
			map: map,
			draggable:DragAble,
			animation: google.maps.Animation.DROP,
			title:"Hello World!",
			icon: iconPath
		});
		
		//Content structure of info Window for the Markers
		var contentString = $('<div class="marker-info-win">'+
		'<div class="marker-inner-win"><span class="info-content">'+
		'<h1 class="marker-heading">'+MapTitle+'</h1>'+
		MapDesc+
		'<img src = "{{ asset("uploads/'+MapPath+'") }}" '+
         'alt = "'+MapTitle +'" />'+
		'</span><button name="remove-marker" class="remove-marker" title="Remove Marker">Remove Marker</button>'+
		'</div></div>');	

		
		//Create an infoWindow
		var infowindow = new google.maps.InfoWindow();
		//set the content of infoWindow
		infowindow.setContent(contentString[0]);

		//Find remove button in infoWindow
		var removeBtn 	= contentString.find('button.remove-marker')[0];
		var saveBtn 	= contentString.find('button.save-marker')[0];

		//add click listner to remove marker button
		google.maps.event.addDomListener(removeBtn, "click", function(event) {
			remove_marker(marker);
		});
		
		if(typeof saveBtn !== 'undefined') //continue only when save button is present
		{
			//add click listner to save marker button
			google.maps.event.addDomListener(saveBtn, "click", function(event) {
				var mReplace = contentString.find('span.info-content'); //html to be replaced after success
				var mName = contentString.find('input.save-name')[0].value; //name input field value
				var mDesc  = contentString.find('textarea.save-desc')[0].value; //description input field value
				var mType = contentString.find('select.save-type')[0].value; //type of marker
				var mImage = contentString.find('input.save-image')[0].value; //image input field value
				
				if(mName =='' || mDesc =='')
				{
					alert("Please enter Name and Description!");
				}else{
					save_marker(marker, mName, mDesc, mType, mReplace, mImage); //call save marker function
				}
			});
		}
		
		//add click listner to save marker button		 
		google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map,marker); // click on marker opens info window 
	    });
		  
		if(InfoOpenDefault) //whether info window should be open by default
		{
		  infowindow.open(map,marker);
		}
	}
	
	//############### Remove Marker Function ##############
	function remove_marker(Marker)
	{
		
		/* determine whether marker is draggable 
		new markers are draggable and saved markers are fixed */
		if(Marker.getDraggable()) 
		{
			Marker.setMap(null); //just remove new marker
		}
		else
		{
			//Remove saved marker from DB and map using jQuery Ajax
			var mLatLang = Marker.getPosition().toUrlValue(); //get marker position
			var myData = {del : 'true', latlang : mLatLang}; //post variables
			$.ajax({
			  type: "POST",
			  url: "{{ URL::to('objetos'); }}",
			  data: myData,
			  success:function(data){
					Marker.setMap(null); 
					alert(data);
				},
				error:function (xhr, ajaxOptions, thrownError){
					alert(thrownError); //throw any errors
				}
			});
		}

	}
	
	//############### Save Marker Function ##############
	function save_marker(Marker, mName, mAddress, mType, replaceWin, mImage)
	{
		//Save new marker using jQuery Ajax
		 var mLatLang = Marker.getPosition().toUrlValue(); //get marker position
		 var myData = {name : mName, address : mAddress, latlang : mLatLang, type : mType }; //post variables
		 console.log(replaceWin);		
		 $.ajax({
		 type: "POST",
		 url: "{{ URL::to('objetos'); }}",
		 data: myData,
		  success:function(data){
			  alert(data.latlang);
				 replaceWin.html(data); //replace info window with new html
				 Marker.setDraggable(false); //set marker to fixed
				 Marker.setIcon('../img/pin_blue.png'); //replace icon
             },
             error:function (xhr, ajaxOptions, thrownError){
                 alert(thrownError); //throw any errors
             }
		 });
	}

});

function buscaMissing(lat,lng)
{
	//alert (lat, lng)
	var marker2 = new google.maps.Marker({ position: new google.maps.LatLng(lat, lng), map: map, title: 'my 2nd title'});
	map.panTo(marker2.getPosition());
}

</script>

<style type="text/css">
h1.heading{padding:0px;margin: 0px 0px 10px 0px;text-align:center;font: 18px Georgia, "Times New Roman", Times, serif;}

/* width and height of google map */
#google_map {width: 90%; height: 500px;margin-top:0px;margin-left:auto;margin-right:auto;}

/* Marker Edit form */
.marker-edit label{display:block;margin-bottom: 5px;}
.marker-edit label span {width: 100px;float: left;}
.marker-edit label input, .marker-edit label select{height: 24px;}
.marker-edit label textarea{height: 60px;}
.marker-edit label input, .marker-edit label select, .marker-edit label textarea {width: 60%;margin:0px;padding-left: 5px;border: 1px solid #DDD;border-radius: 3px;}

/* Marker Info Window */
h1.marker-heading{color: #585858;margin: 0px;padding: 0px;font: 18px "Trebuchet MS", Arial;border-bottom: 1px dotted #D8D8D8;}
div.marker-info-win {max-width: 300px;margin-right: -20px;}
div.marker-info-win p{padding: 0px;margin: 10px 0px 10px 0;}
div.marker-inner-win{padding: 5px;}
button.save-marker, button.remove-marker{border: none;background: rgba(0, 0, 0, 0);color: #00F;padding: 0px;text-decoration: underline;margin-right: 10px;cursor: pointer;
}
</style>
@stop
@section('titulo')
Missing
@stop
@section('sidebar')
    @parent
@stop
@section('content')
<div id="google_map"></div></div>
    
    
    <!-- Wrap the rest of the page in another container to center all the content.
    <div class="container marketing">-->
    
    <div class="row">
  <div class="span12">
    <div class="row">
      <div class="span10"><div id="google_map"></div></div>
      <div class="span2">
     	Missing Recientes
      <table class="table table-hover">
     	@foreach($objetos as $objeto)
     	<tr>
     	<td>
     	{{ $objeto->nombre_objeto }} {{ HTML::link('#', 'Ir al Missing', array('onclick' => 'buscaMissing( '.$objeto->latitud_objeto.' , '.$objeto->longitud_objeto.' )')) }}
     	</td>
     	</tr>
       @endforeach
     </table>
      </div>
      
    </div>
  </div>
</div> 
	
      <!-- START THE FEATURETTES -->
      
      <!-- /END THE FEATURETTES -->
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Missing Company, Inc.</p>
      </footer>
    </div><!-- /.container -->
    
@stop
