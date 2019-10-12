<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            'name' => Str::Random(40),
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'last_modification_at' => now(),
            'last_modification_by' => rand(0, 5),
            'active' => rand(0, 2)
        ]);

        DB::table('role')->insert([
            'name' => Str::Random(40),
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'last_modification_at' => now(),
            'last_modification_by' => rand(0, 5),
            'active' => rand(0, 2)
        ]);

        DB::table('role')->insert([
            'name' => Str::Random(40),
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'last_modification_at' => now(),
            'last_modification_by' => rand(0, 5),
            'active' => rand(0, 2)
        ]);

        DB::table('role')->insert([
            'name' => Str::Random(40),
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'last_modification_at' => now(),
            'last_modification_by' => rand(0, 5),
            'active' => rand(0, 2)
        ]);

        DB::table('role')->insert([
            'name' => Str::Random(40),
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'last_modification_at' => now(),
            'last_modification_by' => rand(0, 5),
            'active' => rand(0, 2)
        ]);

        DB::table('role')->insert([
            'name' => Str::Random(40),
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'last_modification_at' => now(),
            'last_modification_by' => rand(0, 5),
            'active' => rand(0, 2)
        ]);
    }
}
