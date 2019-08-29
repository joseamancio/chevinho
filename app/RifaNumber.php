<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RifaNumber extends Model
{
    protected $fillable = ['rifa_id', 'user_id', 'number', 'status'];

    public function rifa()
    {
    	return $this->hasOne('App\Rifa', 'id', 'rifa_id');
    }

    public function getNumberAttribute($value)
    {
    	if(strlen((string)$value) == 1) {
    		return '00'.$value;
    	}else if(strlen((string)$value) == 2) {
    		return '0'.$value;
    	} else {
    		return $value;
    	}
    }

    public function disponiveis()
    {
        return $this;
    }
}
