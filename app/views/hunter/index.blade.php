@extends('layouts.default')

@section('content')

Got some yaks n shit

<script>


map = new GMaps({
    div: '#map-canvas',
    zoom: 12,
    lat: {{ $latitude }},
    lng: {{ $longitude }},
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

    // Plot location of each Yak
    @foreach($yaks as $yak)

        map.addMarker({
            lat: {{ $yak['latitude'] }},
            lng: {{ $yak['longitude'] }},
            title: 'Some yak',
            infoWindow: {
              content: '<p>{{{ $yak['message'] }}}</p>'
            }
        });

    @endforeach
</script>

@endsection