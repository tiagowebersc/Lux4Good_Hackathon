<?php

use Illuminate\Database\Seeder;

class ActionTargetGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('action_target_group')->insert([
            'action_id' => 1,
            'created_at' => now(),
            'created_by' => 1,
            'updated_at' => now(),
            'updated_by' => 1,
            'active' => rand(0, 1),
        ]);

        DB::table('action_target_group')->insert([
            'action_id' => 2,
            'created_at' => now(),
            'created_by' => 2,
            'updated_at' => now(),
            'updated_by' => 2,
            'active' => rand(0, 1),
        ]);

        DB::table('action_target_group')->insert([
            'action_id' => 3,
            'created_at' => now(),
            'created_by' => 3,
            'updated_at' => now(),
            'updated_by' => 3,
            'active' => rand(0, 1),
        ]);

        DB::table('action_target_group')->insert([
            'action_id' => 4,
            'created_at' => now(),
            'created_by' => 4,
            'updated_at' => now(),
            'updated_by' => 4,
            'active' => rand(0, 1),
        ]);

        DB::table('action_target_group')->insert([
            'action_id' => 5,
            'created_at' => now(),
            'created_by' => 5,
            'updated_at' => now(),
            'updated_by' => 5,
            'active' => rand(0, 1),
        ]);

        DB::table('action_target_group')->insert([
            'action_id' => 6,
            'created_at' => now(),
            'created_by' => 6,
            'updated_at' => now(),
            'updated_by' => 6,
            'active' => rand(0, 1),
        ]);
    }
}
