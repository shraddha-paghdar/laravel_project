@extends('layouts.app')

@section('content')
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
                       <li><a href="mumbai">MUMBAI</a></li>
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
                       <li><a href="mumbai">MUMBAI</a></li>
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
                       <li><a href="mumbai">MUMBAI</a></li>
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
 @endsection
