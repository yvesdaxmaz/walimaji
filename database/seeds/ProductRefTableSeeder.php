<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductRefTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('fr_FR');
        $type_id = DB::table('product_types')
            ->select('id')
            ->get()->toArray() ;

        $data = [];


        for($i = 0; $i < 40-1; $i ++) {
            $data[] = [
                'designation' => $faker->text(7),
                'description' => $faker->text(50),
                'image' => $faker->text(10),
                'type' => $faker->numberBetween($type_id[0]->id,$type_id[count($type_id)-1]->id),
                'idActor' =>2,
            ];
        }

        DB::table('product_refs')->insert($data);
    }
}
