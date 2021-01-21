function initialize() {
  	var mapCanvas = document.getElementById('map');

    var mapOptions = {
      center: new google.maps.LatLng(10.025300, 105.759370),
      disableDefaultUI: true,
      scrollwheel: false,
      zoom: 16,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    //Create map
    var map = new google.maps.Map(mapCanvas, mapOptions);

    //Create marker
    var marker = new google.maps.Marker({
      
      position: new google.maps.LatLng(10.025300, 105.759370),
      map: map,
      title: 'the Bebop',
      icon: "themes/westeros/images/map-marker.png"
 	});

    //Map marker info
    var contentString = '<div id="map-info">'+
      '<h3>eCommerce</h3>'+
      '<p style="text-align:left; margin:0;"><strong>eCommerce</strong>, is the <strong>best betta fish, orchid...</strong> in the area.<br>please visit our company..</p>'+
      '</div>';

    //Add info to marker 
	var infowindow = new google.maps.InfoWindow({
	  content: contentString
	});

	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map,marker);
	});

    //Keep map centered
    google.maps.event.addDomListener(window, 'resize', function() {
    	var center = map.getCenter();
    	google.maps.event.trigger(map, "resize");
    	map.setCenter(center); 
	});
  }
  google.maps.event.addDomListener(window, 'load', initialize);