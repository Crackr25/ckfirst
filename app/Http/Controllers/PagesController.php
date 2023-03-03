<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   
    public function Power(){
        return view('pages.index');
    }

    public function addUser(){
        return view('pages.add');
    }

    public function editUser(){
        return view('pages.edit');
    }
}
