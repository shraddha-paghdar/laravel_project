@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
			<table class="table table striped">
				<thead>
					<tr>
						<th>Comments</th>
						<th>Approval</th>
					</tr>
				</thead>
				<tbody>
					@forelse($comments as $comment)
					<tr>
						<td>{{$comment->comment}}</td>
						<td>
							 <form action="{{url('/toggle-approve')}}" method="POST">
		   	 					{{csrf_field()}}

		   	 						<input <?php if($comment->approve == 1){echo "checked";}?> type="checkbox" name='approve'>

		   	 						<input type="hidden" name="CommentId" value="{{$comment->id}}">

		   	 						<input class="btn btn-primary" type="submit" value="Done">
		   					 </form>
						</td>
						
					</tr>
					@empty
					<h4>No Data</h4>
					@endforelse
				</tbody>
	</table>
	</div>
	</div>
	<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
	<h1 style="text-align: center;">Email </h1>
	<hr>
   	 <form action="{{url('/sent')}}" method="POST">
   	 	{{csrf_field()}}

   	 	<div class="form-group">
   	 		<label for="comment" style="padding-left: 10px;">Write Email</label>
   	 			<input class="form-control" name="comment" placeholder="Write Email" type="text">
   	 	</div>
   	 	<input class="btn btn-primary" type="submit" value="Send">
   	 </form>

</div>
</div>
</div>
</div>
</div>
	</div>
</div>
@endsection 