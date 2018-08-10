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
        $faker = \Faker\Factory::create('fr_FR');
        $data = [];
        $types = [1, 2, 3, 4];


        for ($i = 0; $i < 90; $i++) {
            $data[] = [
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => mt_rand(100000, 600000),
                'type_id' => $types[$i % 4]
            ];
        }


        DB::table('users')->insert($data);

    }
}
