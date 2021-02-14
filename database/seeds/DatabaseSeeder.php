<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CreateUsersSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(GroupsTableSeeder::class);

        $this->call(PartAChoicesTableSeeder::class);
        $this->call(PartAScoringTableSeeder::class);
        $this->call(PartASelfEvalTableSeeder::class);

        $this->call(PartBChoicesTableSeeder::class);
        $this->call(PartBScoringTableSeeder::class);
        $this->call(PartBSelfEvalTableSeeder::class);        
    }
}
