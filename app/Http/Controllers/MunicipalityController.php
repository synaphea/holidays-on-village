<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Municipality;
use App\Village;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Nathanmac\Utilities\Parser\Parser;
use Nathanmac\Utilities\Parser\Exceptions\ParserException;

class MunicipalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $municipalities = Municipality::all();
        return view('poi.region.index')->with('municipalities', $municipalities);
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
        $municipality = Municipality::find(intval($id));

        $items = Village::where('municipality_id', intval($id))->get();

        return view('poi.municipality.show')
            ->with('municipality', $municipality)
            ->with('items', $items);
    }

    public function geo($id)
    {
        $municipality = Municipality::find(intval($id));
        $parser = new Parser();
        return response()->json($parser->json($municipality['geo']));
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
