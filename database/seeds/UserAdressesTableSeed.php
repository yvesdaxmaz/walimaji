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
                'latitude' => $faker->latitude(-11.6651200, -11.6966512),
                'longitude' => $faker->longitude(27.483400, 27.483422),
                'adresse' => "somewhere"
            ];
        }

        DB::table('user_adresses')->insert($data);
    }
}
