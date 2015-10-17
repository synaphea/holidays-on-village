<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\County;
use App\Municipality;
use App\Region;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Nathanmac\Utilities\Parser\Parser;
use Nathanmac\Utilities\Parser\Exceptions\ParserException;

class CountyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $counties = County::all();
        return view('poi.county.index')->with('counties', $counties);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $county = County::find(intval($id));
        $region = Region::find(intval($county['region_id']));
        
        $items = Municipality::where('county_id', intval($id))->get();

        return view('poi.county.show')
            ->with('county', $county)
            ->with('region', $region)
            ->with('items', $items);
    }

    public function geo($id)
    {
        $county = County::find(intval($id));
        $parser = new Parser();
        return response()->json($parser->json($county['geo']));
    }    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
