function initMap(){

	// google maps is ready to be used
	var theDiv = document.querySelector('#socialMatrix-map');
	// data on Te Papa
	var socialMatrixData = {
		lat: -41.2912189,
		lng: 174.7879691
	};
	var mapOptions = {
		zoom: 15,
		styles:
			[
			  {
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#242f3e"
			      }
			    ]
			  },
			  {
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#746855"
			      }
			    ]
			  },
			  {
			    "elementType": "labels.text.stroke",
			    "stylers": [
			      {
			        "color": "#242f3e"
			      }
			    ]
			  },
			  {
			    "featureType": "administrative.locality",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#d59563"
			      }
			    ]
			  },
			  {
			    "featureType": "poi",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#d59563"
			      }
			    ]
			  },
			  {
			    "featureType": "poi.park",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#263c3f"
			      }
			    ]
			  },
			  {
			    "featureType": "poi.park",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#6b9a76"
			      }
			    ]
			  },
			  {
			    "featureType": "road",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#38414e"
			      }
			    ]
			  },
			  {
			    "featureType": "road",
			    "elementType": "geometry.stroke",
			    "stylers": [
			      {
			        "color": "#212a37"
			      }
			    ]
			  },
			  {
			    "featureType": "road",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#9ca5b3"
			      }
			    ]
			  },
			  {
			    "featureType": "road.highway",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#746855"
			      }
			    ]
			  },
			  {
			    "featureType": "road.highway",
			    "elementType": "geometry.stroke",
			    "stylers": [
			      {
			        "color": "#1f2835"
			      }
			    ]
			  },
			  {
			    "featureType": "road.highway",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#f3d19c"
			      }
			    ]
			  },
			  {
			    "featureType": "transit",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#2f3948"
			      }
			    ]
			  },
			  {
			    "featureType": "transit.station",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#d59563"
			      }
			    ]
			  },
			  {
			    "featureType": "water",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#17263c"
			      }
			    ]
			  },
			  {
			    "featureType": "water",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#515c6d"
			      }
			    ]
			  },
			  {
			    "featureType": "water",
			    "elementType": "labels.text.stroke",
			    "stylers": [
			      {
			        "color": "#17263c"
			      }
			    ]
			  }
			]
		center: socialMatrixData
	};
	// create the map
	var theMap = new google.maps.Map(theDiv,mapOptions);


	//
	var socialMatrixMarkerOptions = {
		position: socialMatrixData,
		map: theMap,
		icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
		
	};
	// now we can create markers
	var socialMatrixMarker = new google.maps.Marker(socialMatrixMarkerOptions);

	// // find out where the user is
	// // make sure the device has Geolocation capabilities
	// if(navigator.geolocation){
	// 	// Yes, the device has geolocation capabilities
	// 	// ASK the user for the location
	// 	 navigator.geolocation.getCurrentPosition(function(position){
	// 	 	console.log(position);
	// 	 	var userData = {
	// 	 		lat: position.coords.latitude,
	// 	 		lng: position.coords.longitude
	// 	 	};
	// 	 	// prepare the user marker options
	// 	 	var userMarkerOptions = {
	// 	 		position: userData,
	// 	 		map: theMap
	// 	 	};
	// 	 	// create a marker to represent the user
	// 	 	var userMarker = new google.maps.Marker(userMarkerOptions);
	// 	 	userMarker.setAnimation(google.maps.Animation.DROP);
	// 	 	// focus on the users location
	// 	 	// pan over nicely if the two points are close enough
	// 	 	// instantly transition if points are distant
	// 	 	theMap.panTo(userData);
	// 	 	// prepare the nerd (good at calculating routes)
	// 	 	var directionsService = new google.maps.DirectionsService();
	// 	 	// prepare the artist (to draw directions on the map)
	// 	 	var directionsDisplay = new google.maps.DirectionsRenderer();
	// 	 	// tell the artist which map to paint on
	// 	 	directionsDisplay.setMap(theMap);
	// 	 	// direction settings
	// 	 	var directionSettings = {
	// 	 		origin: userData,
	// 	 		destination: socialMatrixData,
	// 	 		travelMode: google.maps.TravelMode['DRIVING'] // WALKING, BICYCLING, TRANSIT
	// 	 	};
	// 	 	// do the calculations (this actually gets sent to google)
	// 	 	directionsService.route(directionSettings, function(response, status){
	// 	 		// once the math is complete
	// 	 		if (status == 'OK') {
	// 	 			// tell the artist to draw on the map
	// 	 			directionsDisplay.setDirections(response);
	// 	 		}
	// 	 	});
	// 	 });
	// } else {
	// 	// No !!!
	// }
}