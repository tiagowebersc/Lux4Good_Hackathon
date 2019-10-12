<?php

use Illuminate\Database\Seeder;

class ActionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('action')->insert([
            'description' => Str::random(40),
            'campaign_id' => 1,
            'user_editor_id' => 1,
            'user_responsible_id' => 1,
            'objective_id' => 1,
            'theme_id' => 1,
            'partner' => Str::random(100),
            'date' => now(),
            'created_at' => now(),
            'created_by' => 1,
            'updated_at' => now(),
            'updated_by' => 1,
            'active' => rand(0, 1)
        ]);

        DB::table('action')->insert([
            'description' => Str::random(40),
            'campaign_id' => 2,
            'user_editor_id' => 2,
            'user_responsible_id' => 2,
            'objective_id' => 2,
            'theme_id' => 2,
            'partner' => Str::random(100),
            'date' => now(),
            'created_at' => now(),
            'created_by' => 2,
            'updated_at' => now(),
            'updated_by' => 2,
            'active' => rand(0, 1)
        ]);

        DB::table('action')->insert([
            'description' => Str::random(40),
            'campaign_id' => 3,
            'user_editor_id' => 3,
            'user_responsible_id' => 3,
            'objective_id' => 3,
            'theme_id' => 3,
            'partner' => Str::random(100),
            'date' => now(),
            'created_at' => now(),
            'created_by' => 3,
            'updated_at' => now(),
            'updated_by' => 3,
            'active' => rand(0, 1)
        ]);

        DB::table('action')->insert([
            'description' => Str::random(40),
            'campaign_id' => 4,
            'user_editor_id' => 4,
            'user_responsible_id' => 4,
            'objective_id' => 4,
            'theme_id' => 4,
            'partner' => Str::random(100),
            'date' => now(),
            'created_at' => now(),
            'created_by' => 4,
            'updated_at' => now(),
            'updated_by' => 4,
            'active' => rand(0, 1)
        ]);

        DB::table('action')->insert([
            'description' => Str::random(40),
            'campaign_id' => 5,
            'user_editor_id' => 5,
            'user_responsible_id' => 5,
            'objective_id' => 5,
            'theme_id' => 5,
            'partner' => Str::random(100),
            'date' => now(),
            'created_at' => now(),
            'created_by' => 5,
            'updated_at' => now(),
            'updated_by' => 5,
            'active' => rand(0, 1)
        ]);

        DB::table('action')->insert([
            'description' => Str::random(40),
            'campaign_id' => 6,
            'user_editor_id' => 6,
            'user_responsible_id' => 6,
            'objective_id' => 6,
            'theme_id' => 6,
            'partner' => Str::random(100),
            'date' => now(),
            'created_at' => now(),
            'created_by' => 6,
            'updated_at' => now(),
            'updated_by' => 6,
            'active' => rand(0, 1)
        ]);

        DB::table('action')->insert([
            'description' => Str::random(40),
            'campaign_id' => 6,
            'user_editor_id' => 6,
            'user_responsible_id' => 6,
            'objective_id' => 6,
            'theme_id' => 6,
            'partner' => Str::random(100),
            'date' => now(),
            'created_at' => now(),
            'created_by' => 6,
            'updated_at' => now(),
            'updated_by' => 6,
            'active' => rand(0, 1)
        ]);
    }
}
