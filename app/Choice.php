<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $table = 'choices';

    public $timestamps = false;

    public function evaluations() {
        return $this->hasMany("App\Evaluation");
    }

    public function scorings() {
        return $this->hasMany("App\Scoring");
    }

    public function scores() {
        return $this->hasMany("App\Score");
    }
}
