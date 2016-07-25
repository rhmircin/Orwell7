		//set up markers
		var myMarkers = {"markers": [
				{"latitude": "-12.1109906", "longitude":"-76.9847615", "icon": "img/map-marker2.png"}
			]
		};

		//set up map options
		$("#map").mapmarker({
			zoom	: 18,
			center	: new google.maps.LatLng(-12.1109906, -76.9847615),
			markers	: myMarkers
		});
