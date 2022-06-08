<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class FEventController extends Controller
{
    public function index()
    {   
        $event = Event::latest()->get();
        return view('frontend.event.index',compact('event'));
    }
    public function show($id, Request $request)
    {
        $detail = DB::table('events')->where('id', $id)->first();
        return view('frontend.event.page',compact('detail'));
    }
}
