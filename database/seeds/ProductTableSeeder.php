<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('fr_FR');
        $refs_id = DB::table('product_refs')->select('id')->get()->toArray();

        $data = [];

        for($i = 0; $i < 160; $i ++) {
            $ref_id=$faker->numberBetween($refs_id[0]->id,$refs_id[count($refs_id)-1]->id);
            $actorId=DB::select('select u.id from users u 
                            where u.type_id = (SELECT pt.idActor
                                                FROM product_types pt
                                                WHERE pt.id = (SELECT pr.type
                                                                FROM product_refs pr 
                                                                WHERE pr.id = '.$ref_id.'))');

            $data[] = [
                'quantity' => 60,
                'description' => $faker->text(50),
                'idRef' =>$ref_id,
                'idActor' =>$faker->numberBetween($actorId[0]->id,$actorId[count($actorId)-1]->id)
            ];
        }

        Db::table('products')->insert($data);
    }
}
