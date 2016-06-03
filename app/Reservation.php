<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

    protected $fillable = [
        'length',
        'payment',
        'program_id',
        'canceled'
    ];

    protected $dates = ['payedOn'];

    protected $length = [
        'MESEČNO' => 'mesečno',
        'SEMESTRSKO' => 'semestrsko'
    ];


    protected $payment = [
        'CASH' => 'z denarjem',
        'CREDITCARD' => 's kreditno kartico'
    ];

    protected $cancel = [
        0 => 'veljavno',
        1 => 'preklic'
    ];

    public function getCancel()
    {
        return $this->cancel;
    }

    public function getPayment()
    {
        return $this->payment;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function program(){
        return $this->belongsTo('App\Program');
    }
}
