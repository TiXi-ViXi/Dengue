<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class Patient extends Controller
{
    public function PatientIndex()
    {

        return view ('patient');
    }
    
   

    public function storePatient(Request $request)
{
    // Get the authenticated user's ID
    $userId = Auth::id();

    $data = array(
        'user_id' => $userId, // Associate the user ID with the patient record
        'Name' => $request->name,
        'Gender' => $request->gender,
        'City' => $request->city,
        'Age' => $request->age,
        'Phone_No' => $request->phone,
        'Blood_Group' => $request->bloodgroup,
        'Current_Platelet' => $request->currentplat,
        'Lowest_Platelet' => $request->lowestplat,
        'rating' => $request->rating,
    );

    DB::table('_patient')->insert($data);
    return redirect()->back()->with('success', 'Successfully inserted!');

}
}

