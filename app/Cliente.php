<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps = false;
    public $fillable = ['nome','ativo'];

    public function animais()
    {
        return $this->hasMany('App\Animal');
    }

    public function endereco()
    {
        return $this->hasMany('App\Endereco');
    }

    protected static function  boot()
    {
        parent::boot();

        static::deleting(function($cliente){
            $cliente->animais()->delete();
            $cliente->endereco()->delete();
        });
    }
}