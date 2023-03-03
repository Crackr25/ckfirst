<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'firstname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'lastname' => 'required|string|max:255',
            'address' => 'required|string',
            'gender' => 'required|in:M,F',
        ]);

        $now = Carbon::now();

            
        DB::table('subcriber')->insert([
        'FIRSTNAME' => $data['firstname'],
        'MIDDLENAME' => $data['middlename'],
        'LASTNAME' => $data['lastname'],
        'ADDRESS' => $data['address'],
        'GENDER' => $data['gender'],
        'CREATEDDATETIME' => now(),
        'UPDATEDATETIME' => now(),
    ]);
        
    return redirect('/')->with('success', 'Form submitted successfully.');
    }
}
