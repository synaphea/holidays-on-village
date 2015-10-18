<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Region;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }
}
