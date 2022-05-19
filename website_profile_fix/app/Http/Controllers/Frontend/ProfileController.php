<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {   
        $profile = Profile::get();
        return view('frontend.profile.index',compact('profile'));
    }
}
