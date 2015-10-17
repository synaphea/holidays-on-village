<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Village;
use App\Municipality;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Nathanmac\Utilities\Parser\Parser;
use Nathanmac\Utilities\Parser\Exceptions\ParserException;

class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $villages = Village::all();
        return view('poi.village.index')->with('villages', $villages);
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
        $village = Village::find(intval($id));
        $municipality = Municipality::find(intval($village['municipality_id']));
        return view('poi.village.show')
            ->with('village', $village)
            ->with('municipality', $municipality);
    }

    public function geo($id)
    {
        $village = Village::find(intval($id));
        $parser = new Parser();
        return response()->json($parser->json($village['geo']));
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
