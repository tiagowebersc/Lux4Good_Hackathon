<?php

use Illuminate\Database\Seeder;

class TownTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('town')->insert([
            'name' => 'Differdange',
            'image_path' => 'differdange.jpg',
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => 1
        ]);

        DB::table('town')->insert([
            'name' => "Petange",
            'image_path' => 'petange.jpg',
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => 1
        ]);

        DB::table('town')->insert([
            'name' => "Rodange",
            'image_path' => 'rodange.jpg',
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => 1
        ]);

        DB::table('town')->insert([
            'name' => "Niederkorn",
            'image_path' => 'niederkorn.jpg',
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => 1
        ]);

        DB::table('town')->insert([
            'name' => "Luxembourg-City",
            'image_path' => 'luxembourg.jpg',
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => 1
        ]);

        DB::table('town')->insert([
            'name' => "Belval",
            'image_path' => 'belvaux.png',
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => 1
        ]);
    }
}
