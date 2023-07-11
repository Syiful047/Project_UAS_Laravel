<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //admin
    public function index()
    {
        return view('admin/index');
    }
}
