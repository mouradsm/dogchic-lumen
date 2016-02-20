<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 19/02/16
 * Time: 21:59
 */

namespace App\Transformers;

use App\Cliente;
use League\Fractal\TransformerAbstract;

class ClientTransformer extends TransformerAbstract
{
    public function transform(Cliente $cliente)
    {
        return [

            'id'    => (int)$cliente->id,
            'nome'  => $cliente->nome,
            'animais' => $cliente->animais->toArray()
        ];
    }

}