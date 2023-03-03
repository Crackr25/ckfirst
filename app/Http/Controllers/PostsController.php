<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pst;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $subcriber = DB::table('subcriber')->select('ID', 'lastname', 'firstname', 'middlename', 'gender', 'address')->get();

            
        return view('pages.index', ['subcriber' => $subcriber]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'firstname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'lastname' => 'required|string|max:255',
            'address' => 'required|string',
            'gender' => 'required|in:M,F',
        ]);



            
        DB::table('subcriber')->insert([
        'FIRSTNAME' => $data['firstname'],
        'MIDDLENAME' => $data['middlename'],
        'LASTNAME' => $data['lastname'],
        'ADDRESS' => $data['address'],
        'GENDER' => $data['gender'],
        'CREATEDATETIME' => now(),
        'UPDATEDATETIME' => now(),
    ]);
        
     // Flash a success message to the session
     $request->session()->flash('success', 'Data successfully stored.');

     // Redirect back to the form page
     return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
