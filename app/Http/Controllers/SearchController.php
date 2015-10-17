<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\County;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function index()
    {
        $items = County::all();
        return view('explore')->with('items', $items);
    }
}
