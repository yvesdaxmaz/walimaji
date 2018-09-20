<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=\Faker\Factory::create('fr_FR');
        $products_id=Db::table('products')
            ->select('id','idActor')->get()->toArray();
        $data = [];

        foreach($products_id as $product) {
            $price=$faker->numberBetween(500,50000);
            $data[] = [
                'priceWithTax' =>$price,
                'priceWithoutTax' => $price+($price/10),
                'dateTime' => $faker->dateTime('now'),
                'idProduct' =>$product->id,
                'idActor' => $product->idActor
            ];
        }

        DB::table('product_prices')->insert($data);
    }
}
