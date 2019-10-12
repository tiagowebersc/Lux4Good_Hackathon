<?php

use Illuminate\Database\Seeder;

class OutcomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('outcome')->insert([
            'action_id' => 1,
            'age' => rand(0, 5),
            'income' => rand(0, 8),
            'stay_duration_country' => rand(0, 8),
            'stay_duration_town' => rand(0, 8),
            'child' => rand(0, 4),
            'country_of_birth_id' => 1,
            'gender' => rand(0, 2),
            'education' => rand(0, 5),
            'marital_status' => rand(0, 5),
            'professional_status' => rand(0, 3)
        ]);

        DB::table('outcome')->insert([
            'action_id' => 2,
            'age' => rand(0, 5),
            'income' => rand(0, 8),
            'stay_duration_country' => rand(0, 8),
            'stay_duration_town' => rand(0, 8),
            'child' => rand(0, 4),
            'country_of_birth_id' => 2,
            'gender' => rand(0, 2),
            'education' => rand(0, 5),
            'marital_status' => rand(0, 5),
            'professional_status' => rand(0, 3)
        ]);

        DB::table('outcome')->insert([
            'action_id' => 3,
            'age' => rand(0, 5),
            'income' => rand(0, 8),
            'stay_duration_country' => rand(0, 8),
            'stay_duration_town' => rand(0, 8),
            'child' => rand(0, 4),
            'country_of_birth_id' => 3,
            'gender' => rand(0, 2),
            'education' => rand(0, 5),
            'marital_status' => rand(0, 5),
            'professional_status' => rand(0, 3)
        ]);

        DB::table('outcome')->insert([
            'action_id' => 4,
            'age' => rand(0, 5),
            'income' => rand(0, 8),
            'stay_duration_country' => rand(0, 8),
            'stay_duration_town' => rand(0, 8),
            'child' => rand(0, 4),
            'country_of_birth_id' => 4,
            'gender' => rand(0, 2),
            'education' => rand(0, 5),
            'marital_status' => rand(0, 5),
            'professional_status' => rand(0, 3)
        ]);

        DB::table('outcome')->insert([
            'action_id' => 5,
            'age' => rand(0, 5),
            'income' => rand(0, 8),
            'stay_duration_country' => rand(0, 8),
            'stay_duration_town' => rand(0, 8),
            'child' => rand(0, 4),
            'country_of_birth_id' => 5,
            'gender' => rand(0, 2),
            'education' => rand(0, 5),
            'marital_status' => rand(0, 5),
            'professional_status' => rand(0, 3)
        ]);

        DB::table('outcome')->insert([
            'action_id' => 6,
            'age' => rand(0, 5),
            'income' => rand(0, 8),
            'stay_duration_country' => rand(0, 8),
            'stay_duration_town' => rand(0, 8),
            'child' => rand(0, 4),
            'country_of_birth_id' => 6,
            'gender' => rand(0, 2),
            'education' => rand(0, 5),
            'marital_status' => rand(0, 5),
            'professional_status' => rand(0, 3)
        ]);
    }
}
