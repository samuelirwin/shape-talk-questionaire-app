<?php

use Illuminate\Database\Seeder;
use App\Choice;

class PartBChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $choices = [
            ['option' => 'Blank'],
            ['option' => 'Bashful'],
            ['option' => 'Brassy'],
            ['option' => 'Bossy'],
            ['option' => 'Undisciplined'],
            ['option' => 'Unsympathetic'],
            ['option' => 'Unenthusiastic'],
            ['option' => 'Unforgiving'],
            ['option' => 'Restrained'],
            ['option' => 'Resentful'],
            ['option' => 'Inflexible'],
            ['option' => 'Repetitious'],
            ['option' => 'Fussy'],
            ['option' => 'Fearful'],
            ['option' => 'Forgetful'],
            ['option' => 'Frank'],
            ['option' => 'Impatient'],
            ['option' => 'Insecure'],
            ['option' => 'Indecisive'],
            ['option' => 'Interruptive'],
            ['option' => 'Unpopular'],
            ['option' => 'Uninvolved'],
            ['option' => 'Unpredictable'],
            ['option' => 'Unaffectionate'],
            ['option' => 'Headstrong'],
            ['option' => 'Haphazard'],
            ['option' => 'Hard to please'],
            ['option' => 'Hesitant'],
            ['option' => 'Plain'],
            ['option' => 'Pessimistic'],
            ['option' => 'Proud'],
            ['option' => 'Accommodating'],
            ['option' => 'Angered easily'],
            ['option' => 'Aimless'],
            ['option' => 'Argumentative'],
            ['option' => 'Alienated'],
            ['option' => 'Naive'],
            ['option' => 'Negative Attitude'],
            ['option' => 'No doubt'],
            ['option' => 'Laidback'],
            ['option' => 'Worrier'],
            ['option' => 'Withdrawn'],
            ['option' => 'Workaholic'],
            ['option' => 'Wants credit'],
            ['option' => 'Too sensitive'],
            ['option' => 'Thoughtless'],
            ['option' => 'Timid'],
            ['option' => 'Talkative'],
            ['option' => 'Doubtful'],
            ['option' => 'Disorganised'],
            ['option' => 'Domineering'],
            ['option' => 'Depressed'],
            ['option' => 'Inconsistent'],
            ['option' => 'Introvert'],
            ['option' => 'Intolerant'],
            ['option' => 'Indifferent'],
            ['option' => 'Messy'],
            ['option' => 'Moody'],
            ['option' => 'Mumbles'],
            ['option' => 'Manipulative'],
            ['option' => 'Slow'],
            ['option' => 'Stubborn'],
            ['option' => 'Show-off'],
            ['option' => 'Skeptical'],
            ['option' => 'Loner'],
            ['option' => 'Superior'],
            ['option' => 'Lazy'],
            ['option' => 'Loud'],
            ['option' => 'Sluggish'],
            ['option' => 'Suspicious'],
            ['option' => 'Short-tempered'],
            ['option' => 'Scatterbrained'],
            ['option' => 'Revengeful'],
            ['option' => 'Restless'],
            ['option' => 'Reluctant'],
            ['option' => 'Rash'],
            ['option' => 'Compromising'],
            ['option' => 'Critical'],
            ['option' => 'Crafty'],
            ['option' => 'Changeable'],
        ];

        foreach ($choices as $key => $value) {
            Choice::create($value);
        }
    }
}
