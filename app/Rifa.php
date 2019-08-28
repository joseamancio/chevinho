<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rifa extends Model
{
    protected $fillable = ['name', 'description'];

    public function numbers()
    {
    	return $this->hasMany('App\RifaNumber', 'rifa_id', 'id');
    }
}
