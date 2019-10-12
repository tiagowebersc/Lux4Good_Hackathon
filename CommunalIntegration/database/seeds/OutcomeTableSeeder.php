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
        for ($i=1; $i < 10000; $i++) { 
            DB::table('outcome')->insert([
                'action_id' => rand(1,7),
                'age' => rand(0, 5),
                'income' => rand(0, 8),
                'stay_duration_country' => rand(1968,2014),
                'stay_duration_town' => rand(1968,2014),
                'child' => rand(0, 4),
                'country_of_birth_id' => 1,
                'gender' => rand(0, 1),
                'education' => rand(0, 5),
                'marital_status' => rand(0, 5),
                'professional_status' => rand(0, 3)
            ]);
        }
    }
}
