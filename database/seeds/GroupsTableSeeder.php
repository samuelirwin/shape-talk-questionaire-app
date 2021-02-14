<?php

use Illuminate\Database\Seeder;
use App\Group;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
            [
                'name' => 'self_eval_part_a'
            ],
            [
                'name' => 'self_eval_part_b'
            ],
            [
                'name' => 'scoring_part_a'
            ],
            [
                'name' => 'scoring_part_b'
            ],
        ];

        foreach ($groups as $key => $value) {
            Group::create($value);
        }
    }
}
