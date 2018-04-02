@extends('layouts.app')

@section('content')

<div id="fh5co-about" data-section="services">
    <div class="container">
      <div class="row row-bottom-padded-sm">
        <div class="col-md-12 section-heading text-center">
          <h2 class="to-animate">MUMBAI</h2><br><br>
        <div class="row row-bottom-padded-sm">
        <div class="col-md-6">
          <h3 class="to-animate">Whoever said that Mumbai is the city of dreams, 
            he was absolutely correct!</h3>
             <h3 class="to-animate">AND you will also realize the same once you 
            will cut and run through the treacherous alleys of Mumbai. The 
            city is the dwelling of two extremes, where the rich plunge 
            into the best of leisure world and the poor celebrates earning
             two proper meals a day.</h3>
             <br><br>
          
          <div class="col-md-12 to-animate">
            <img src="images/Mumbai.jpg" class="img-responsive img-rounded" alt="">
          <br><br></div>  
             <h3 class="to-animate"> Mumbai 
             also proffer its visitors a chance to get the taste of Maharashtra’s 
             delectable cuisine, not to forget the street food which is the pride 
             of the city. Shop till you drop at the ever so trendy Fashion Street or 
             drop down at Colaba, where you will learn the secret of cheap shopping. 
            Mumbai has multiple faces and each one is delightful!</h3>
        </div>
        <div class="col-md-6">
          <br>
          <div class="col-md-12 to-animate">
            <img src="images/Gateway_of_India.jpg" class="img-responsive img-rounded" alt="">
          <br>
          </div>
           <h3 class="to-animate" style:"padding-top:"10px";"> Well, what can we say that’s LIFE! 
             Anyways getting back to the reason why one can have a fabulous 
             holiday in Mumbai – the city offers ample of options that range 
             from going on a sightseeing tour (Mumbai Darshan) to partying late 
             into the night in a high-end club in a luxury hotel, from visiting 
             the caves of Elephanta to watching a film shoot in Film City.</h3> <br>
          <div class="col-md-12 to-animate">
            <img src="images/marine.jpg" class="img-responsive img-rounded" alt="">
          <br>
          </div>    
        </div>
        </div>
        <div class="row">
        <div class="col-md-8 col-md-offset-2 single-animate animate-features-3">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30193.267630560433!2d72.8202
          6692790532!3d18.924379248458703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d
          1c73a0d5cad%3A0xc70a25a7209c733c!2sGateway+Of+India+Mumbai!5e0!3m2!1sen!2sin!4v1490885977
          412" width="600" height="450" frameborder="0" style="border:0"></iframe>
        <br><br> </div>
       
          <div class="row" style="padding-top:10px">
        <div class="col-md-3 col-md-offset-4 single-animate animate-features-3">
          <a href="mumbaimap" class="btn btn-primary btn-block">STREET VIEW</a>
        </div>
    </div>
  </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              	<h1 style="text-align: center;">User Comments</h1>
              	<hr>
                 	 <form action="{{url('/comment')}}" method="POST">
                 	 	{{csrf_field()}}

                 	 	<div class="form-group">
                 	 		<label for="comment" style="padding-left:20px">Write comment {{ Auth::user()->name }}</label>
                 	 			<input class="form-control" name="comment" placeholder="Write comment" type="text">
                 	 	</div>


                    <center>
                 	 	<input class="btn btn-primary" type="submit" value="Submit">
                 	 </center></form>
                 	 <h5 style="padding-left:20px">List of Comments</h5>
                 	 <hr>
                 	 <br>
                 	 	<ul>
                 	 	@forelse($comments as $comment)
                       <p>{{ $comment->user_comment}}:{{$comment->comment}}</p>
                 	 	@empty

                 	 	<h4>No Comments</h4>

                 	 	@endforelse
                       </ul>
            </div>
          </div>
    </div>
  </div>
</div>
@endsection