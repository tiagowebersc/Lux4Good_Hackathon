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
        $theme=['youth', 'integration', 'participation', 'sport', 'outreach'];
        DB::table('theme')->insert([
            'description' => $theme[rand(0, 4)],
            'created_at' => now(),
            'created_by' => 1,
            'updated_at' => now(),
            'updated_by' => 1,
            'active' => rand(0, 1)
        ]);

        DB::table('theme')->insert([
            'description' => $theme[rand(0, 4)],
            'created_at' => now(),
            'created_by' => 2,
            'updated_at' => now(),
            'updated_by' => 2,
            'active' => rand(0, 1)
        ]);

        DB::table('theme')->insert([
            'description' => $theme[rand(0, 4)],
            'created_at' => now(),
            'created_by' => 3,
            'updated_at' => now(),
            'updated_by' => 3,
            'active' => rand(0, 1)
        ]);

        DB::table('theme')->insert([
            'description' => $theme[rand(0, 4)],
            'created_at' => now(),
            'created_by' => 4,
            'updated_at' => now(),
            'updated_by' => 4,
            'active' => rand(0, 1)
        ]);

        DB::table('theme')->insert([
            'description' => $theme[rand(0, 4)],
            'created_at' => now(),
            'created_by' => 5,
            'updated_at' => now(),
            'updated_by' => 5,
            'active' => rand(0, 1)
        ]);

        DB::table('theme')->insert([
            'description' => $theme[rand(0, 4)],
            'created_at' => now(),
            'created_by' => 6,
            'updated_at' => now(),
            'updated_by' => 6,
            'active' => rand(0, 1)
        ]);

        DB::table('theme')->insert([
            'description' => $theme[rand(0, 4)],
            'created_at' => now(),
            'created_by' => 7,
            'updated_at' => now(),
            'updated_by' => 7,
            'active' => rand(0, 1)
        ]);

        DB::table('theme')->insert([
            'description' => $theme[rand(0, 4)],
            'created_at' => now(),
            'created_by' => 7,
            'updated_at' => now(),
            'updated_by' => 7,
            'active' => rand(0, 1)
        ]);

        DB::table('theme')->insert([
            'description' => $theme[rand(0, 4)],
            'created_at' => now(),
            'created_by' => 8,
            'updated_at' => now(),
            'updated_by' => 8,
            'active' => rand(0, 1)
        ]);
    }
}
