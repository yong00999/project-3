<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function destroy(){
        Auth::logout();
        return redirect()->route("dashboard");
    }
}
