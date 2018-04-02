<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #street-view {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="street-view"></div>

    @yield('content')
    
   <script async defer
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGZ8dhKh2oii46cOFWxPC2zkbPoFZvHVo&callback=initialize">
    </script>
  </body>
</html>