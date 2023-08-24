<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class Donar extends Controller
{
    public function DonarIndex()
    {

        return view ('donar');
    }
    
    public function storeDonar(Request $request)
{
    // Get the authenticated user's ID
    $userId = Auth::id();

    $data = array(
        'user_id' => $userId, // Associate the user ID with the donor record
        'Name' => $request->name,
        'Age' => $request->age,
        'gender' => $request->gender,
        'City' => $request->city,
        'Phone_No' => $request->phone,
        'Blood_Group' => $request->bloodgroup,
        'Last_Donation' => $request->lastdonation,
        'Availabilty' => $request->availablity,
    );

    DB::table('_donar')->insert($data);
    return redirect()->back()->with('success', 'Successfully inserted!');

}
}