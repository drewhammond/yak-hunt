
function initialize() {
    var myLatLng = new google.maps.LatLng(-34.397, 150.644);
    var mapOptions = {
        zoom: 4,
        center: myLatLng
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);

    var infowindow = new google.maps.InfoWindow({
        content: 'Change the zoom level',
        position: myLatLng
    });
    infowindow.open(map);

    google.maps.event.addListener(map, 'zoom_changed', function() {
        var zoomLevel = map.getZoom();
        map.setCenter(myLatLng);
        infowindow.setContent('Zoom: ' + zoomLevel);
        console.log(map.latitude);
    });
}

//google.maps.event.addDomListener(window, 'load', initialize);


map = new GMaps({
    div: '#map-canvas',
    zoom: 12,
    lat: -34.397,
    lng: 150.644,
    streetViewControl: false,
    dragend: function(e) {

        // Handle update in location
        if (e.zoom >= 12) {
            console.log('Zoom level is close enough to display circle overlay');
            // Overlay for Yik Yak boundary
        }
        console.log(e.zoom );
        console.log(
            map.getCenter()
        );
    }
});

map.drawCircle({
        lat: -34.397,
        lng:150.644,
        draggable: false,
        radius: 2000
    }
);

