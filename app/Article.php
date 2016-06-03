<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{


    protected $table = 'articles';


    // mass assignment -> v fillable so tisti, ki jih pustis spreminjat
    protected $fillable = [
        'title',
        'content',
        'publishedOn',
        //'users_id' // TEMPORARY!!!
    ];

    protected $dates = ['publishedOn'];

    public function scopePublished($query){
        $query->where('publishedOn', '<=', Carbon::now());

    }

    // tisti, ki se niso published, pa se morajo bit ... Unpublished se mi ni zdelo primerno
    public function scopeTobepublished($query){
        $query->where('publishedOn', '>', Carbon::now());
    }

    public function setPublishedOnAttribute($date){
        $this->attributes['publishedOn'] = Carbon::createFromFormat('Y-m-d', $date);
        // = Carbon::parse($date); // ce hoces midnight - 00:00:00, ne pa trenutni cas cez x dni
    }

    public function getPublishedOnAttribute($date){
        return new Carbon($date);
        // lahko dodas tudi format, da ti v formi ni treba
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

}
