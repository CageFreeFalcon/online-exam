<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['name'];

    public function questions(){
        return $this->hasMany('App\Question');
    }

    public function student(){
        return $this->belongsToMany('App\Student')->withPivot('marks_obtain');
    }

}
