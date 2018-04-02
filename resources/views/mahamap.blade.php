 @extends('layouts.maps')

@section('content')


 <script>
      var panorama;
      function initialize() {
        panorama = new google.maps.StreetViewPanorama(
            document.getElementById('street-view'),
            {
              position: {lat:17.9307285, lng:73.6477342},
              pov: {heading: 165, pitch: 0},
              zoom: 1
            });
      }
    </script>
     
@endsection