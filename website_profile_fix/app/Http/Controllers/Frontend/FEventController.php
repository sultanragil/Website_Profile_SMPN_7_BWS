<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class FEventController extends Controller
{
    public function index()
    {   
        $event = Event::get();
        return view('frontend.event.index',compact('event'));
    }
}
