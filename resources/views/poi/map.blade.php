<script src='https://api.mapbox.com/mapbox.js/v2.2.2/mapbox.js'></script>
<link href='https://api.mapbox.com/mapbox.js/v2.2.2/mapbox.css' rel='stylesheet' />
<script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-draw/v0.2.2/leaflet.draw.js'></script>

<div id="mapView"></div>

<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(event) {
		L.mapbox.accessToken = 'pk.eyJ1IjoidGhlb2ZpbGlzIiwiYSI6IjBkMjg3ZmFjMThkM2ViZDBmZjdhZTUzOWNjNDk1NjQyIn0.0I5QIOz7hnbW-xKxfUOTWA';
	
		var map = L.mapbox.map('mapView', 'mapbox.streets');

		var runLayer = L.mapbox.featureLayer().loadURL("/county/geo/{{ $county['_id'] }}")
		    .on('ready', function() {
		        map.fitBounds(runLayer.getBounds());
		    })
		    .addTo(map);
		});
</script>