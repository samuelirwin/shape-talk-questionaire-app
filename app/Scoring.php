<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scoring extends Model
{
    protected $table = "scorings";

    public $timestamps = false;

    public function group() {
        return $this->belongsTo("App\Group");
    }

    public function question() {
        return $this->belongsTo("App\Question");
    }

    public function choice() {
        return $this->belongsTo("App\Choice");
    }
}
