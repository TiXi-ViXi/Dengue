<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class Hospital extends Controller
{
    public function HospitalIndex()
    {

        return view ('hospital');
    }
    
    public function storeHospital(Request $request)
{
    // Get the authenticated user's ID
    $userId = Auth::id();

    $data = array(
        'user_id' => $userId, // Associate the user ID with the Hpspital record
        'Name' => $request->hospitalname,
        'City' => $request->city,
        'TotalSeat' => $request->totalseat,
        'Phone_No' => $request->phone,
    );

    DB::table('_hospital')->insert($data);
    return redirect()->back()->with('success', 'Successfully inserted!');

}
}