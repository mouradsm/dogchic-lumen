<?php

namespace App\Http\Controllers;

use App\Animal;
use Illuminate\Http\Request;

use App\Http\Requests;
use Dingo\Api\Routing\Helpers;
use App\Http\Controllers\Controller;

use App\Animal as Animals;

class AnimalController extends Controller
{
    use Helpers;

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $animais = Animal::all();

        return $animais;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return \App\Animal::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
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
        //
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