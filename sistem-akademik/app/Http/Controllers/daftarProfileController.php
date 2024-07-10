<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class daftarProfileController extends Controller
{
    public function index(){
        return view('admin.daftarProfile');
    }
}
