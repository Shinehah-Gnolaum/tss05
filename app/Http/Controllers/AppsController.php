<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppsController extends Controller
{
    public function show()
    {
    	return view('pages.apps');
    }

}
