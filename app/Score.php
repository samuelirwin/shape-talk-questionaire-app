<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $table = "scores";

    protected $fillable = ["user_id", "question_id", "choice_id", "total"];

    public function user() {
        return $this->belongsTo("App\User");
    }

    public function question() {
        return $this->belongsTo("App\Question");
    }

    public function choice() {
        return $this->belongsTo("App\Choice");
    }
}
