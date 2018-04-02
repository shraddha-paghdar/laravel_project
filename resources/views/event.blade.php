<!DOCTYPE html>
<html lang="en">
<head>
   <script src="{{ asset('js/app.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/style.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="C:\wamp\www\testproject\vendor\phpunit\php-code-coverage\src\CodeCoverage\Report\HTML\Renderer\Template\css\bootstrap.min.">
    
         <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
     <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        .responsive-img{
             max-width: 100%;
             height: auto;
        }
    </style>

</head>
<body>

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                       INCREDIBLE INDIA
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="/images/ganges.png" alt="Image">
        <div class="carousel-caption">
        <h1><a href="">Ganges.</a></h1>
        </div>      
      </div>
      <div class="item">
        <img src="/images/taj.png" alt="Image">
        <div class="carousel-caption">
          <h1><a href="">Taj Mahal.</a></h1>
        </div>      
      </div>

      <div class="item">
        <img src="/images/lotus.png" alt="Image">
        <div class="carousel-caption">
        <h1><a href="">Lotus Temple.</a></h1>
        </div>      
      </div>
    </div>


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  <div id="fh5co-features" data-section="features">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section-heading text-center">
          <h2 class="single-animate animate-features-1">Where To Visit</h2>
         </div>
     </div>
      <div class="row row-bottom-padded-sm">
        <div class="col-md-3 col-sm-12 col-xs-12 col-xxs-12 fh5co-service to-animate">
          <div class="fh5co-desc">
               <div class="panel-group" id="accordion">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h1 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">EAST</a>
                    </h1>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body" style="padding:0px">
                      <ul>
                       <li><a href="status">MUMBAI</a></li>
                       <li><a href="maha">MAHABALESHWAR</a></li>
                       <li><a href="panch">PANCHGANI</a></li>
                       <li><a href="khandala">KHANDAL</a></li>
                       </ul>
                    </div>
                </div>
              </div>
            </div>
        </div>  
      </div>
        <div class="col-md-3 col-sm-12 col-xs-12 col-xxs-12 fh5co-service to-animate">
          <div class="fh5co-desc">
              <div class="panel-group" id="accordion">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse2 ">WEST</a>
                    </h4>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body" style="padding:0px">
                      <ul>
                       <li><a href="status">MUMBAI</a></li>
                       <li><a href="maha">MAHABALESHWAR</a></li>
                       <li><a href="panch">PANCHGANI</a></li>
                       <li><a href="khandala">KHANDAL</a></li>
                       </ul>
                    </div>
                </div>
              </div>
            </div>
        </div>
      </div>
        <div class="clearfix visible-sm-block visible-xs-block"></div>
        <div class="col-md-3 col-sm-12 col-xs-12 col-xxs-12 fh5co-service to-animate">
          <div class="fh5co-desc">
             <div class="panel-group" id="accordion">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h1 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">NORTH</a>
                    </h1>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body" style="padding:0px">
                     <ul>
                       <li><a href="status">MUMBAI</a></li>
                       <li><a href="maha">MAHABALESHWAR</a></li>
                       <li><a href="panch">PANCHGANI</a></li>
                       <li><a href="khandala">KHANDAL</a></li>
                       </ul>
                    </div>
                </div>
              </div>
            </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12 col-xxs-12 fh5co-service to-animate">
          <div class="fh5co-desc">
                   <div class="panel-group" id="accordion">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">SOUTH</a>
                    </h4>
                  </div>
                  <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body" style="padding:0px">
                    <ul>
                       <li><a href="status">MUMBAI</a></li>
                       <li><a href="maha">MAHABALESHWAR</a></li>
                       <li><a href="panch">PANCHGANI</a></li>
                       <li><a href="khandala">KHANDAL</a></li>
                       </ul>
                    </div>
                </div>
              </div>
            </div>
        </div>  
        </div>
            </div>
  </div>

  
<!-- 
<div class="container">
   
</div> -->
</div>
        
        <div class="clearfix visible-sm-block visible-xs-block"></div>
      </div><!-- 
      <div class="row">
        <div class="col-md-4 col-md-offset-4 single-animate animate-features-3">
          <a href="#" class="btn btn-primary btn-block">Learn More</a>
        </div>
      </div> -->
    </div>
  </div>

      <div class="row" id="team">
        <div class="col-md-12 section-heading text-center to-animate">
          <h2>Event Calendar</h2>
        </div>
  </div>

    <div class="container">
    <div class="row">
        <div class="col-md-12">
           

        <div class="panel panel-default">
            <div class="panel-heading">Calendar</div>

                <div class="panel-body">
                    {!! $calendar->Calendar() !!}
                    {!! $calendar->script() !!}
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>

</body>
</html>