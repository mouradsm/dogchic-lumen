<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 19/02/16
 * Time: 22:12
 */

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Animal;


class AnimalTransformer extends TransformerAbstract
{
    //TODO Escrever este transformer direito
    public function transform(Animal $animal)
    {
        return [
            'id'        => $animal->id,
            'nome'      => $animal->nome,
            'raca'      => $animal->raca,
            'porte'     => $animal->porte,
            'cor'       => $animal->cor,
            'idade'     => $animal->idade,
            'obs'       => $animal->obs,
            'cliente'   => $animal->cliente_id
        ];
    }
}