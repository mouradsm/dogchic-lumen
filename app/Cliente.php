<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps = false;

    public function animais()
    {
        return $this->hasMany('App\Animal');
    }

    public function endereco()
    {
        return $this->hasMany('App\Endereco');
    }
}