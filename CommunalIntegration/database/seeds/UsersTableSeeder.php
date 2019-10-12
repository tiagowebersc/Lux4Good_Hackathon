<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'town_id' => 1,
            'role_id' => 1,
            'name' => Str::random(20),
            'email' => Str::random(20).'@gmail.com',
            'password' => bcrypt(Str::random(10)),
            'created_at' => now(),
            'created_by' => 1,
            'updated_at' => now(),
            'updated_by' => 1,
            'active' => rand(0, 2),
        ]);

        DB::table('users')->insert([
            'town_id' => 2,
            'role_id' => 2,
            'name' => Str::random(20),
            'email' => Str::random(20).'@gmail.com',
            'password' => bcrypt(Str::random(10)),
            'created_at' => now(),
            'created_by' => 2,
            'updated_at' => now(),
            'updated_by' => 2,
            'active' => rand(0, 2),
        ]);

        DB::table('users')->insert([
            'town_id' => 3,
            'role_id' => 3,
            'name' => Str::random(20),
            'email' => Str::random(20).'@gmail.com',
            'password' => bcrypt(Str::random(10)),
            'created_at' => now(),
            'created_by' => 3,
            'updated_at' => now(),
            'updated_by' => 3,
            'active' => rand(0, 2),
        ]);

        DB::table('users')->insert([
            'town_id' => 4,
            'role_id' => 4,
            'name' => Str::random(20),
            'email' => Str::random(20).'@gmail.com',
            'password' => bcrypt(Str::random(10)),
            'created_at' => now(),
            'created_by' => 4,
            'updated_at' => now(),
            'updated_by' => 4,
            'active' => rand(0, 2),
        ]);

        DB::table('users')->insert([
            'town_id' => 5,
            'role_id' => 5,
            'name' => Str::random(20),
            'email' => Str::random(20).'@gmail.com',
            'password' => bcrypt(Str::random(10)),
            'created_at' => now(),
            'created_by' => 5,
            'updated_at' => now(),
            'updated_by' => 5,
            'active' => rand(0, 2),
        ]);

        DB::table('users')->insert([
            'town_id' => 6,
            'role_id' => 6,
            'name' => Str::random(20),
            'email' => Str::random(20).'@gmail.com',
            'password' => bcrypt(Str::random(10)),
            'created_at' => now(),
            'created_by' => 6,
            'updated_at' => now(),
            'updated_by' => 6,
            'active' => rand(0, 2),
        ]);
    }
}
