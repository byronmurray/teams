<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\EventModel;
use Illuminate\Http\Request;
use MaddHatter\LaravelFullcalendar\Facasdes\Calendar;


class CalendarController extends Controller {

    public function index() { //code should be inside a method
        $events[] = \Calendar::event(
            "Valentine's Day", //event title
            true, //full day event?
            '2017-03-13', //start time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg)
            '2017-03-23', //end time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg),bit.ly/1z7QWbg),
            1, //optional event ID
            [
                'url' => '/events',
                //any other full-calendar supported parameters
            ]
        );

        //$eloquentEvent = EventModel::first(); //EventModel implements MaddHatter\LaravelFullcalendar\Event  

        $calendar = \Calendar::addEvents($events) //add an array with addEvents
            ->setOptions([ //set fullcalendar options
                'firstDay' => 1
            ])->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
                /*'viewRender' => 'function() {alert("Callbacks!");}'*/
        ]); 

        return view('calendars.index', compact('calendar'));
    }

}