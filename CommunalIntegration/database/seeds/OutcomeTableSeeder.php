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
        $gender=['male', 'female'];
        $age=['0-10', '11-20', '20-40', '40+'];
        $education=['primary school', 'high school', 'university', 'master', 'phd'];
        $income=['0-1000', '1001-4000', '4000+'];
        for ($i=1; $i < 10000; $i++) { 
            DB::table('outcome')->insert([
                'action_id' => rand(1,7),
                'age' => $age[round(rand(0, 150)/50)],
                'income' => $income[rand(0, 2)],
                'stay_duration_country' => rand(1968,2014),
                'stay_duration_town' => rand(1968,2014),
                'child' => rand(0, 4),
                'country_of_birth_id' => 1,
                'gender' => $gender[round(rand(0, 10)/10)],
                'education' => $education[rand(0, 4)],
                'marital_status' => rand(0, 5),
                'professional_status' => rand(0, 3)
            ]);
        }
    }
}
