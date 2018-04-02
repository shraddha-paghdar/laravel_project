<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{	 public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request)
    {
    	$comment = new Mail();
    	$comment =$request->comment;
    	$test = new Mail();
    	$test = User::all();
    	foreach($test as $tests){
	    Mail::send('emails.test',['type'=>$comment],function($message)use($tests)
		{

			$message->to(array($tests->email),'Auth')->subject('Upcoming Events!!');
		});
    }  
    return view('thankyou');
}
}
