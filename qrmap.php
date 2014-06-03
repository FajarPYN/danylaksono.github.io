
<!DOCTYPE html>
<html>
<head>
	<title>Leaflet Quick Start Guide Example</title>
	<meta charset="utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="../dist/leaflet.css" />
</head>
<body>
	<div id="map" style="width: 600px; height: 400px"></div>

	<script src="../dist/leaflet.js"></script>
	<script>

		var map = L.map('map'), {
                center: new L.LatLng( <?php echo $_GET["lat"]; ?>, <?php echo $_GET["long"]; ?>),
                zoom: 15
                });
            
            map.setView(new L.LatLng(<?php echo $_GET["lat"]; ?>, <?php echo $_GET["long"]; ?>), 15);

		L.tileLayer('https://{s}.tiles.mapbox.com/v3/{id}/{z}/{x}/{y}.png', {
			maxZoom: 18,
			attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
				'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="http://mapbox.com">Mapbox</a>',
			id: 'examples.map-i86knfo3'
		}).addTo(map);

        var markerlocation = new L.LatLng(<?php echo $_GET["lat"]; ?>, <?php echo $_GET["long"]; ?>);
        
        
		qrmarker = L.marker(markerlocation).addTo(map)
			.bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();

        var popup = L.popup();

		function onMapClick(e) {
			popup
				.setLatLng(e.latlng)
				.setContent("You clicked the map at " + e.latlng.toString())
				.openOn(map);
		}

		map.on('click', onMapClick);

	</script>
</body>
</html>
