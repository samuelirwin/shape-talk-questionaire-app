<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $table = "evaluations";

    public $timestamps = false;

    public function choice() {
        return $this->belongsTo("App\Choice");
    }

    public function group() {
        return $this->belongsTo("App\Group");
    }
}
