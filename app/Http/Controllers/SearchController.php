<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Region;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function index()
    {
        $items = Region::all();
        return view('explore')->with('items', $items);
    }
}
