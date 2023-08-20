<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Patient extends Controller
{
    public function PatientIndex()
    {

        return view ('patient');
    }
}
