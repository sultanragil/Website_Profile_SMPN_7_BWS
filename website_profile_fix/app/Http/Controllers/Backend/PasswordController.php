<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class PasswordController extends Controller
{
    //
    public function update($id, Request $request)
    {
        $user = User::find($id);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('profile.index')->with('success','Data Telah Diperbarui');
    }
}
