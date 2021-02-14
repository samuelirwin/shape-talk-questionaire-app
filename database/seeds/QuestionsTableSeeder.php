<?php

use Illuminate\Database\Seeder;
use App\Question;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'question' => 'Triangle',
                'score_value' => '1'
            ],
            [
                'question' => 'Squiggle',
                'score_value' => '1'
            ],
            [
                'question' => 'Box',
                'score_value' => '1'
            ],
            [
                'question' => 'Circle',
                'score_value' => '1'
            ],
        ];

        foreach ($questions as $key => $value) {
            Question::create($value);
        }
    }
}
