@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
				
                <div class="panel-body">
                   Your message has been successfully sent!!
                   <form action="{{url('/dash')}}" method="get">
                    {{csrf_field()}}

                    <input class="btn btn-primary" type="submit" value="Back to Dashboard">
                 </form> 
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection 

