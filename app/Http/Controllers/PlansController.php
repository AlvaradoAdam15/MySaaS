<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class PlansController extends Controller
{
    public function index()
    {
        return view ('pricingtables');
    }
}