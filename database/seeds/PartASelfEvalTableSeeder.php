<?php

use Illuminate\Database\Seeder;
use App\Evaluation;

class PartASelfEvalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $part_a_evals = [
            // self-evaluations col 1 part a
            ['group_id' => '1','choice_id' => '1','meta' => '1'],
            ['group_id' => '1','choice_id' => '5','meta' => '1'],
            ['group_id' => '1','choice_id' => '9','meta' => '1'],
            ['group_id' => '1','choice_id' => '13','meta' => '1'],
            ['group_id' => '1','choice_id' => '17','meta' => '1'],
            ['group_id' => '1','choice_id' => '21','meta' => '1'],
            ['group_id' => '1','choice_id' => '25','meta' => '1'],
            ['group_id' => '1','choice_id' => '29','meta' => '1'],
            ['group_id' => '1','choice_id' => '33','meta' => '1'],
            ['group_id' => '1','choice_id' => '37','meta' => '1'],
            ['group_id' => '1','choice_id' => '41','meta' => '1'],
            ['group_id' => '1','choice_id' => '45','meta' => '1'],
            ['group_id' => '1','choice_id' => '49','meta' => '1'],
            ['group_id' => '1','choice_id' => '53','meta' => '1'],
            ['group_id' => '1','choice_id' => '57','meta' => '1'],
            ['group_id' => '1','choice_id' => '61','meta' => '1'],
            ['group_id' => '1','choice_id' => '65','meta' => '1'],
            ['group_id' => '1','choice_id' => '69','meta' => '1'],
            ['group_id' => '1','choice_id' => '73','meta' => '1'],
            ['group_id' => '1','choice_id' => '77','meta' => '1'],

            // self-evaluations col 2 part a
            ['group_id' => '1','choice_id' => '2','meta' => '2'],
            ['group_id' => '1','choice_id' => '6','meta' => '2'],
            ['group_id' => '1','choice_id' => '10','meta' => '2'],
            ['group_id' => '1','choice_id' => '14','meta' => '2'],
            ['group_id' => '1','choice_id' => '18','meta' => '2'],
            ['group_id' => '1','choice_id' => '22','meta' => '2'],
            ['group_id' => '1','choice_id' => '26','meta' => '2'],
            ['group_id' => '1','choice_id' => '30','meta' => '2'],
            ['group_id' => '1','choice_id' => '34','meta' => '2'],
            ['group_id' => '1','choice_id' => '38','meta' => '2'],
            ['group_id' => '1','choice_id' => '42','meta' => '2'],
            ['group_id' => '1','choice_id' => '46','meta' => '2'],
            ['group_id' => '1','choice_id' => '50','meta' => '2'],
            ['group_id' => '1','choice_id' => '54','meta' => '2'],
            ['group_id' => '1','choice_id' => '58','meta' => '2'],
            ['group_id' => '1','choice_id' => '62','meta' => '2'],
            ['group_id' => '1','choice_id' => '66','meta' => '2'],
            ['group_id' => '1','choice_id' => '70','meta' => '2'],
            ['group_id' => '1','choice_id' => '74','meta' => '2'],
            ['group_id' => '1','choice_id' => '78','meta' => '2'],

            // self-evaluations col 3 part a
            ['group_id' => '1','choice_id' => '3','meta' => '3'],
            ['group_id' => '1','choice_id' => '7','meta' => '3'],
            ['group_id' => '1','choice_id' => '11','meta' => '3'],
            ['group_id' => '1','choice_id' => '15','meta' => '3'],
            ['group_id' => '1','choice_id' => '19','meta' => '3'],
            ['group_id' => '1','choice_id' => '23','meta' => '3'],
            ['group_id' => '1','choice_id' => '27','meta' => '3'],
            ['group_id' => '1','choice_id' => '31','meta' => '3'],
            ['group_id' => '1','choice_id' => '35','meta' => '3'],
            ['group_id' => '1','choice_id' => '39','meta' => '3'],
            ['group_id' => '1','choice_id' => '43','meta' => '3'],
            ['group_id' => '1','choice_id' => '47','meta' => '3'],
            ['group_id' => '1','choice_id' => '51','meta' => '3'],
            ['group_id' => '1','choice_id' => '55','meta' => '3'],
            ['group_id' => '1','choice_id' => '59','meta' => '3'],
            ['group_id' => '1','choice_id' => '63','meta' => '3'],
            ['group_id' => '1','choice_id' => '67','meta' => '3'],
            ['group_id' => '1','choice_id' => '71','meta' => '3'],
            ['group_id' => '1','choice_id' => '75','meta' => '3'],
            ['group_id' => '1','choice_id' => '79','meta' => '3'],

            // self-evaluations col 4 part a
            ['group_id' => '1','choice_id' => '4','meta' => '4'],
            ['group_id' => '1','choice_id' => '8','meta' => '4'],
            ['group_id' => '1','choice_id' => '12','meta' => '4'],
            ['group_id' => '1','choice_id' => '16','meta' => '4'],
            ['group_id' => '1','choice_id' => '20','meta' => '4'],
            ['group_id' => '1','choice_id' => '24','meta' => '4'],
            ['group_id' => '1','choice_id' => '28','meta' => '4'],
            ['group_id' => '1','choice_id' => '32','meta' => '4'],
            ['group_id' => '1','choice_id' => '36','meta' => '4'],
            ['group_id' => '1','choice_id' => '40','meta' => '4'],
            ['group_id' => '1','choice_id' => '44','meta' => '4'],
            ['group_id' => '1','choice_id' => '48','meta' => '4'],
            ['group_id' => '1','choice_id' => '52','meta' => '4'],
            ['group_id' => '1','choice_id' => '56','meta' => '4'],
            ['group_id' => '1','choice_id' => '60','meta' => '4'],
            ['group_id' => '1','choice_id' => '64','meta' => '4'],
            ['group_id' => '1','choice_id' => '68','meta' => '4'],
            ['group_id' => '1','choice_id' => '72','meta' => '4'],
            ['group_id' => '1','choice_id' => '76','meta' => '4'],
            ['group_id' => '1','choice_id' => '80','meta' => '4'],
        ];

        foreach ($part_a_evals as $key => $value) {
            Evaluation::create($value);
        }
    }
}
