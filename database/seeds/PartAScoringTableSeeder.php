<?php

use Illuminate\Database\Seeder;
use App\Scoring;

class PartAScoringTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $part_a_scorings = [
            // scoring triangle part a
            ['group_id' => '3','choice_id' => '1','question_id' => '1'],
            ['group_id' => '3','choice_id' => '7','question_id' => '1'],
            ['group_id' => '3','choice_id' => '12','question_id' => '1'],
            ['group_id' => '3','choice_id' => '15','question_id' => '1'],
            ['group_id' => '3','choice_id' => '20','question_id' => '1'],
            ['group_id' => '3','choice_id' => '23','question_id' => '1'],
            ['group_id' => '3','choice_id' => '27','question_id' => '1'],
            ['group_id' => '3','choice_id' => '29','question_id' => '1'],
            ['group_id' => '3','choice_id' => '35','question_id' => '1'],
            ['group_id' => '3','choice_id' => '40','question_id' => '1'],
            ['group_id' => '3','choice_id' => '41','question_id' => '1'],
            ['group_id' => '3','choice_id' => '48','question_id' => '1'],
            ['group_id' => '3','choice_id' => '50','question_id' => '1'],
            ['group_id' => '3','choice_id' => '54','question_id' => '1'],
            ['group_id' => '3','choice_id' => '59','question_id' => '1'],
            ['group_id' => '3','choice_id' => '62','question_id' => '1'],
            ['group_id' => '3','choice_id' => '67','question_id' => '1'],
            ['group_id' => '3','choice_id' => '70','question_id' => '1'],
            ['group_id' => '3','choice_id' => '75','question_id' => '1'],
            ['group_id' => '3','choice_id' => '78','question_id' => '1'],

            // scoring squiggle part a
            ['group_id' => '3','choice_id' => '3','question_id' => '2'],
            ['group_id' => '3','choice_id' => '6','question_id' => '2'],
            ['group_id' => '3','choice_id' => '11','question_id' => '2'],
            ['group_id' => '3','choice_id' => '16','question_id' => '2'],
            ['group_id' => '3','choice_id' => '17','question_id' => '2'],
            ['group_id' => '3','choice_id' => '24','question_id' => '2'],
            ['group_id' => '3','choice_id' => '28','question_id' => '2'],
            ['group_id' => '3','choice_id' => '30','question_id' => '2'],
            ['group_id' => '3','choice_id' => '36','question_id' => '2'],
            ['group_id' => '3','choice_id' => '39','question_id' => '2'],
            ['group_id' => '3','choice_id' => '42','question_id' => '2'],
            ['group_id' => '3','choice_id' => '45','question_id' => '2'],
            ['group_id' => '3','choice_id' => '52','question_id' => '2'],
            ['group_id' => '3','choice_id' => '53','question_id' => '2'],
            ['group_id' => '3','choice_id' => '60','question_id' => '2'],
            ['group_id' => '3','choice_id' => '63','question_id' => '2'],
            ['group_id' => '3','choice_id' => '68','question_id' => '2'],
            ['group_id' => '3','choice_id' => '72','question_id' => '2'],
            ['group_id' => '3','choice_id' => '76','question_id' => '2'],
            ['group_id' => '3','choice_id' => '77','question_id' => '2'],

            // scoring box part a
            ['group_id' => '3','choice_id' => '4','question_id' => '3'],
            ['group_id' => '3','choice_id' => '5','question_id' => '3'],
            ['group_id' => '3','choice_id' => '10','question_id' => '3'],
            ['group_id' => '3','choice_id' => '13','question_id' => '3'],
            ['group_id' => '3','choice_id' => '18','question_id' => '3'],
            ['group_id' => '3','choice_id' => '22','question_id' => '3'],
            ['group_id' => '3','choice_id' => '25','question_id' => '3'],
            ['group_id' => '3','choice_id' => '31','question_id' => '3'],
            ['group_id' => '3','choice_id' => '33','question_id' => '3'],
            ['group_id' => '3','choice_id' => '38','question_id' => '3'],
            ['group_id' => '3','choice_id' => '44','question_id' => '3'],
            ['group_id' => '3','choice_id' => '47','question_id' => '3'],
            ['group_id' => '3','choice_id' => '49','question_id' => '3'],
            ['group_id' => '3','choice_id' => '56','question_id' => '3'],
            ['group_id' => '3','choice_id' => '58','question_id' => '3'],
            ['group_id' => '3','choice_id' => '61','question_id' => '3'],
            ['group_id' => '3','choice_id' => '66','question_id' => '3'],
            ['group_id' => '3','choice_id' => '71','question_id' => '3'],
            ['group_id' => '3','choice_id' => '73','question_id' => '3'],
            ['group_id' => '3','choice_id' => '79','question_id' => '3'],

            // scoring circle part a
            ['group_id' => '3','choice_id' => '2','question_id' => '4'],
            ['group_id' => '3','choice_id' => '8','question_id' => '4'],
            ['group_id' => '3','choice_id' => '9','question_id' => '4'],
            ['group_id' => '3','choice_id' => '14','question_id' => '4'],
            ['group_id' => '3','choice_id' => '19','question_id' => '4'],
            ['group_id' => '3','choice_id' => '21','question_id' => '4'],
            ['group_id' => '3','choice_id' => '26','question_id' => '4'],
            ['group_id' => '3','choice_id' => '32','question_id' => '4'],
            ['group_id' => '3','choice_id' => '34','question_id' => '4'],
            ['group_id' => '3','choice_id' => '37','question_id' => '4'],
            ['group_id' => '3','choice_id' => '43','question_id' => '4'],
            ['group_id' => '3','choice_id' => '46','question_id' => '4'],
            ['group_id' => '3','choice_id' => '51','question_id' => '4'],
            ['group_id' => '3','choice_id' => '55','question_id' => '4'],
            ['group_id' => '3','choice_id' => '57','question_id' => '4'],
            ['group_id' => '3','choice_id' => '64','question_id' => '4'],
            ['group_id' => '3','choice_id' => '65','question_id' => '4'],
            ['group_id' => '3','choice_id' => '69','question_id' => '4'],
            ['group_id' => '3','choice_id' => '74','question_id' => '4'],
            ['group_id' => '3','choice_id' => '80','question_id' => '4'],
        ];

        foreach ($part_a_scorings as $key => $value) {
            Scoring::create($value);
        }
    }
}
