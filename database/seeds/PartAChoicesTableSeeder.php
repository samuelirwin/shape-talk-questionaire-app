<?php

use Illuminate\Database\Seeder;

use App\Choice;

class PartAChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $choices = [
            ['option' => 'Adventurous'],
            ['option' => 'Adaptable'],
            ['option' =>  'Animated'],
            ['option' => 'Analytical'],
            ['option' => 'Persistent'],
            ['option' => 'Playful'],
            ['option' => 'Persuasive'],
            ['option' => 'Peaceful'],
            ['option' => 'Submissive'],
            ['option' => 'Self-sacrificing'],
            ['option' => 'Sociable'],
            ['option' => 'Strong-willed'],
            ['option' => 'Considerate'],
            ['option' => 'Controlled'],
            ['option' => 'Competitive'],
            ['option' => 'Convincing'],
            ['option' => 'Refreshing'],
            ['option' => 'Respectful'],
            ['option' => 'Reserved'],
            ['option' => 'Resourceful'],
            ['option' => 'Satisfied'],
            ['option' => 'Sensitive'],
            ['option' => 'Self-reliant'],
            ['option' => 'Spirited'],
            ['option' => 'Planner'],
            ['option' => 'Patient'],
            ['option' => 'Positive'],
            ['option' => 'Promoter'],
            ['option' => 'Sure'],
            ['option' => 'Spontaneous'],
            ['option' => 'Scheduled'],
            ['option' => 'Shy'],
            ['option' => 'Orderly'],
            ['option' => 'Obliging'],
            ['option' => 'Outspoken'],
            ['option' => 'Optimistic'],
            ['option' => 'Friendly'],
            ['option' => 'Faithful'],
            ['option' => 'Funny'],
            ['option' => 'Forceful'],
            ['option' => 'Daring'],
            ['option' => 'Delightful'],
            ['option' => 'Diplomatic'],
            ['option' => 'Detailed'],
            ['option' => 'Cheerful'],
            ['option' => 'Consistent'],
            ['option' => 'Cultured'],
            ['option' => 'Confident'],
            ['option' => 'Idealistic'],
            ['option' => 'Independent'],
            ['option' => 'Inoffensive'],
            ['option' => 'Inspiring'],
            ['option' => 'Affectionate'],
            ['option' => 'Decisive'],
            ['option' => 'Dry Humour'],
            ['option' => 'Deep'],
            ['option' => 'Mediator'],
            ['option' => 'Musical'],
            ['option' => 'Mover'],
            ['option' => 'Mixes Easily'],
            ['option' => 'Thoughtful'],
            ['option' => 'Determined'],
            ['option' => 'Talker'],
            ['option' => 'Tolerant'],
            ['option' => 'Listener'],
            ['option' => 'Loyal'],
            ['option' => 'Leader'],
            ['option' => 'Lively'],
            ['option' => 'Contented'],
            ['option' => 'Chief'],
            ['option' => 'Chart maker'],
            ['option' => 'Cute'],
            ['option' => 'Perfectionist'],
            ['option' => 'Pleasant'],
            ['option' => 'Productive'],
            ['option' => 'Popular'],
            ['option' => 'Bouncy'],
            ['option' => 'Bold'],
            ['option' => 'Behaved'],
            ['option' => 'Balanced'],
        ];

        foreach ($choices as $key => $value) {
            Choice::create($value);
        }
    }
}
