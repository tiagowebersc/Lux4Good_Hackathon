<?php

use Illuminate\Database\Seeder;

class CampaignTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campaign')->insert([
            'town_id' => 1,
            'description' => Str::random(40),
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => rand(0, 1),
        ]);

        DB::table('campaign')->insert([
            'town_id' => 2,
            'description' => Str::random(40),
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => rand(0, 1),
        ]);

        DB::table('campaign')->insert([
            'town_id' => 3,
            'description' => Str::random(40),
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => rand(0, 1),
        ]);

        DB::table('campaign')->insert([
            'town_id' => 4,
            'description' => Str::random(40),
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => rand(0, 1),
        ]);

        DB::table('campaign')->insert([
            'town_id' => 5,
            'description' => Str::random(40),
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => rand(0, 1),
        ]);

        DB::table('campaign')->insert([
            'town_id' => 6,
            'description' => Str::random(40),
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => rand(0, 1),
        ]);
    }
}
