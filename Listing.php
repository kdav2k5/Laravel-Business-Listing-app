<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{

    protected $fillable = [
        'name', 'email', 'password',
    ];
    public function user(){

        return $this->belongsTo('App\User');
    }
}
