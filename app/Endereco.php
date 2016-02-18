<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Endereco extends Model
{
    public $timestamps = false;
    protected $table    = 'enderecos';
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
}