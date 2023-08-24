<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Override the authenticated method
    protected function authenticated(Request $request, $user)
    {
        if ($user->type === 'donar') {
            return redirect()->route('donar_route');
        } elseif ($user->type === 'patient') {
            return redirect()->route('patient_route');
        }
          elseif ($user->type === 'hospital') {
            return redirect()->route('hospital_route');
        } 
        else {
            // Fallback action if type is not recognized
            return redirect($this->redirectTo);
        }
    }
}