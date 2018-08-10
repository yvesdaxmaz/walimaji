<?php

use Illuminate\Database\Seeder;

class UserAdressesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('fr_FR');
        $users_id = DB::table('users')
            ->select('id')
            ->get();

        $data = [];


        for($i = 0; $i < count($users_id) - 1; $i ++) {
            $data[] = [
                'user_id' => $users_id[$i]->id,
                'latitude' => $faker->latitude(-11.6, -11.9),
                'longitude' => $faker->longitude(27.4, 27.9),
                'adresse' => "somewhere"
            ];
        }

        DB::table('user_adresses')->insert($data);
    }
}
