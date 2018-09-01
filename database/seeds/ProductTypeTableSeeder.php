<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=\Faker\Factory::create('fr_FR');
        $data = [];
        $types = [1, 2, 3, 4];
        for ($i = 0; $i < 20; $i++) {
            $data[] = [
                'designation' => $faker->name,
                'idActor' => $types[$i % 4]
            ];
        }
        Db::table('product_types')->insert($data);
    }
}
