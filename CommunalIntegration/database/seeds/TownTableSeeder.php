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
            'name' => Str::Random(40),
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => rand(0, 2)
        ]);

        DB::table('town')->insert([
            'name' => Str::Random(40),
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => rand(0, 2)
        ]);

        DB::table('town')->insert([
            'name' => Str::Random(40),
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => rand(0, 2)
        ]);

        DB::table('town')->insert([
            'name' => Str::Random(40),
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => rand(0, 2)
        ]);

        DB::table('town')->insert([
            'name' => Str::Random(40),
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => rand(0, 2)
        ]);

        DB::table('town')->insert([
            'name' => Str::Random(40),
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => rand(0, 2)
        ]);
    }
}
