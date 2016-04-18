<?php

namespace App\Http\Controllers;

use App\ProfileCreatorHtml;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProfileController extends Controller
{
    public function show()
    {
        $creator = new ProfileCreatorHtml();
        Auth::user()->profile($creator);
    }
}
