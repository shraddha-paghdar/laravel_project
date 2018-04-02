<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use MaddHatter\LaravelFullcalendar\Facades\calendar;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('event');
    }
    public function show()  

    {
        $events = [];

    $events[] = \Calendar::event(
    "happy birthday shraddha", //event title
    true, //full day event?
    new \DateTime('2018-04-13'), //start time (you can also use Carbon instead of DateTime)
    new \DateTime('2018-04-14'), //end time (you can also use Carbon instead of DateTime)
    'stringEventId' //optionally, you can specify an event ID
);

    $calendar = Calendar::addEvents($events,['color' => '#e35o22']) //add an array with addEvents
    ->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
        'viewRender' => 'function(){}'
    ]); 
$events1 = [];

    $events1[] = \Calendar::event(
    "Ramnavmi", //event title
    true, //full day event?
    new \DateTime('2018-04-05'), //start time (you can also use Carbon instead of DateTime)
    new \DateTime('2018-04-05'), //end time (you can also use Carbon instead of DateTime)
    'stringEventId' //optionally, you can specify an event ID
);

    $calendars = Calendar::addEvents($events1,['color' => '#e35o22' , 'url' => '/maha']) //add an array with addEvents
    ->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
        'viewRender' => 'function(){}'
    ]); 
        return view('event',compact('calendar'),compact('calendars'));
        
    }
    }