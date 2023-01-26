/* Code based on Google Map APIv3 Tutorials */


var gmapdata;
var gmapmarker;
var infoWindow;

var def_zoomval = 12;
var def_longval = 106.9176;
var def_latval = 47.9185;

function if_gmap_init()
{
	var curpoint = new google.maps.LatLng(def_latval,def_longval);

	gmapdata = new google.maps.Map(document.getElementById("mapitems"), {
		center: curpoint,
		zoom: def_zoomval,
		mapTypeId: 'roadmap'
		});

	gmapmarker = new google.maps.Marker({
					map: gmapdata,
					position: curpoint
				});

	infoWindow = new google.maps.InfoWindow;
	google.maps.event.addListener(gmapdata, 'click', function(event) {
		document.getElementById("latlong").value = event.latLng.lat().toFixed(6)+","+event.latLng.lng().toFixed(6);
		gmapmarker.setPosition(event.latLng);
		if_gmap_updateInfoWindow();
	});

	google.maps.event.addListener(gmapmarker, 'click', function() {
		if_gmap_updateInfoWindow();
		infoWindow.open(gmapdata, gmapmarker);
	});
	document.getElementById("latlong").value = def_latval+","+def_longval;
	return false;
} // end of if_gmap_init


function if_gmap_loadpicker()
{
	var latlong = document.getElementById("latlong").value;
	var res = latlong.split(",");
	latval = res[0];
	longval = res[1];
	if (longval.length > 0) {
		if (isNaN(parseFloat(longval)) == true) {
			longval = def_longval;
		} // end of if
	} else {
		longval = def_longval;
	} // end of if

	if (latval.length > 0) {
		if (isNaN(parseFloat(latval)) == true) {
			latval = def_latval;
		} // end of if
	} else {
		latval = def_latval;
	} // end of if

	var curpoint = new google.maps.LatLng(latval,longval);

	gmapmarker.setPosition(curpoint);
	gmapdata.setCenter(curpoint);
	//gmapdata.setZoom(zoomval);

	if_gmap_updateInfoWindow();
	return false;
} // end of if_gmap_loadpicker



function if_gmap_updateInfoWindow()
{
	infoWindow.setContent("Уртраг: "+ gmapmarker.getPosition().lng().toFixed(6)+"<br>"+"Өргөрөг: "+ gmapmarker.getPosition().lat().toFixed(6));
} // end of if_gmap_bindInfoWindow

