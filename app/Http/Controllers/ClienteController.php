<?php

namespace App\Http\Controllers;

use App\Transformers\ClientTransformer;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

use App\Cliente as Cliente;

class ClienteController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {


        $clientes = Cliente::with('animais')->get();

        if(! $clientes)
        {
            $this->response->errorNotFound('Não existe cliente cadastrado!');
        }

        return $this->response->collection($clientes, new ClientTransformer());
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
        $cliente = Cliente::with('animais')->find($id);

        if(! $cliente){
            $this->response->errorNotFound('Cliente não encontrado');
        }

        return $this->response->item($cliente, new ClientTransformer);
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