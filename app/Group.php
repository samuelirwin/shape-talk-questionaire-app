<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = "groups";

    public $timestamps = false;

    public function evaluations() {
        return $this->hasMany("App\Evaluation");
    }

    public function scorings() {
        return $this->hasMany("App\Scoring");
    }
}
