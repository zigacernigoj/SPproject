<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'programs';

    protected $fillable = ['name', 'description'];

    public function reservations(){
        return $this->hasMany('App\Reservation');
    }

}
