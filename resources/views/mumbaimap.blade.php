 @extends('layouts.maps')

@section('content')


 <script>
      var panorama;
      function initialize() {
        panorama = new google.maps.StreetViewPanorama(
            document.getElementById('street-view'),
            {
              position: {lat:18.921936, lng:72.834573},
              pov: {heading: 165, pitch: 0},
              zoom: 1
            });
      }
    </script>
     
@endsection