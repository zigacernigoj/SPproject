<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName',
        'lastName',
        'gender',
        'birthDate',
        'allergies',
        'diseases',
        'medications',
        'otherHealth',
        'email',
        'phoneNumber',
        'address',
        'username',
        'email',
        'password'
    ];


    protected $dates = ['registeredOn', 'birthDate'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];


    public function articles(){
        return $this->hasMany('App\Article');
    }

    public function reservations(){
        return $this->hasMany('App\Reservation');
    }



    public function isAnAdmin(){
        return $this->getAttributeValue('role')=='ADMIN'? true : false;
    }

    public function isAManager(){
        return $this->getAttributeValue('role')=='MANAGER'? true : false;
    }

    protected $gender = [
        'M' => 'moški',
        'F' => 'ženski'
    ];

    public function getGender()
    {
        return $this->gender;
    }


    public function setBirthDatettribute($date){
        $this->attributes['birthDate'] = Carbon::createFromFormat('Y-m-d', $date);
        // = Carbon::parse($date); // ce hoces midnight - 00:00:00, ne pa trenutni cas cez x dni
    }

    public function getBirthDateAttribute($date){
        return new Carbon($date);
        // lahko dodas tudi format, da ti v formi ni treba
    }


}
