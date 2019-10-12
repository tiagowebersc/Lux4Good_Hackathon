<?php

use Illuminate\Database\Seeder;

class ThemeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('theme')->insert([
            'description' => Str::Random(40),
            'created_at' => now(),
            'created_by' => 1,
            'last_modification_at' => now(),
            'last_modification_by' => 1,
            'active' => rand(0, 2)
        ]);

        DB::table('theme')->insert([
            'description' => Str::Random(40),
            'created_at' => now(),
            'created_by' => 2,
            'last_modification_at' => now(),
            'last_modification_by' => 2,
            'active' => rand(0, 2)
        ]);

        DB::table('theme')->insert([
            'description' => Str::Random(40),
            'created_at' => now(),
            'created_by' => 3,
            'last_modification_at' => now(),
            'last_modification_by' => 3,
            'active' => rand(0, 2)
        ]);

        DB::table('theme')->insert([
            'description' => Str::Random(40),
            'created_at' => now(),
            'created_by' => 4,
            'last_modification_at' => now(),
            'last_modification_by' => 4,
            'active' => rand(0, 2)
        ]);

        DB::table('theme')->insert([
            'description' => Str::Random(40),
            'created_at' => now(),
            'created_by' => 5,
            'last_modification_at' => now(),
            'last_modification_by' => 5,
            'active' => rand(0, 2)
        ]);

        DB::table('theme')->insert([
            'description' => Str::Random(40),
            'created_at' => now(),
            'created_by' => 6,
            'last_modification_at' => now(),
            'last_modification_by' => 6,
            'active' => rand(0, 2)
        ]);
    }
}
