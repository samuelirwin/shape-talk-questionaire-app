<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';

    public $timestamps = false;

    public function scorings() {
        return $this->hasMany("App\Scoring");
    }

    public function scores() {
        return $this->hasMany("App\Score");
    }
}
