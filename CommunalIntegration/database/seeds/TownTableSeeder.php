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
            'name' => Str::Random(10),
            'image_path' => 'pato.png',
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => rand(0, 1)
        ]);

        DB::table('town')->insert([
            'name' => Str::Random(10),
            'image_path' => 'pato1.jpg',
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => rand(0, 1)
        ]);

        DB::table('town')->insert([
            'name' => Str::Random(10),
            'image_path' => 'pato2.jpg',
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => rand(0, 1)
        ]);

        DB::table('town')->insert([
            'name' => Str::Random(10),
            'image_path' => 'pato3.jpg',
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => rand(0, 1)
        ]);

        DB::table('town')->insert([
            'name' => Str::Random(10),
            'image_path' => 'pato4.jpeg',
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => rand(0, 1)
        ]);

        DB::table('town')->insert([
            'name' => Str::Random(10),
            'image_path' => 'pato5.jpeg',
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => rand(0, 1)
        ]);

        DB::table('town')->insert([
            'name' => Str::Random(10),
            'image_path' => 'pato6.jpg',
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => rand(0, 1)
        ]);

        DB::table('town')->insert([
            'name' => Str::Random(10),
            'image_path' => 'pato7.jpg',
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => rand(0, 1)
        ]);

        DB::table('town')->insert([
            'name' => Str::Random(10),
            'image_path' => 'pato8.jpeg',
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => rand(0, 1)
        ]);

        DB::table('town')->insert([
            'name' => Str::Random(10),
            'image_path' => 'pato9.jpg',
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => rand(0, 1)
        ]);

        DB::table('town')->insert([
            'name' => Str::Random(10),
            'image_path' => 'pato10.png',
            'created_at' => now(),
            'created_by' => rand(0, 5),
            'updated_at' => now(),
            'updated_by' => rand(0, 5),
            'active' => rand(0, 1)
        ]);
    }
}
