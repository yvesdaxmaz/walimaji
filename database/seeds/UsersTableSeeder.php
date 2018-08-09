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
        DB::table('user_types')->insert(
            [
                'designation' =>'provider',
                'description' => 'fournisseur d\'intrant',
                'icon' => 'images/images.jpg'
            ],
            [
                'designation' =>'producer',
                'description' => 'producteur d\'intrant',
                'icon' => 'images/images.jpg'
            ],

            [
                'designation' =>'transformer',
                'description' => 'Transformateur d\'intrant',
                'icon' => 'images/images.jpg'
            ],
            [
                'designation' =>'traders',
                'description' => 'Traders d\'intrant',
                'icon' => 'images/images.jpg'
            ]
        );
        DB::table('users')->insert(
            [
                'name' =>'magasin1',
                'email' => 'magasin1@gmail.com',
                'password' => Hash::make('123456'),
                'type_id' => '4',
            ],
            [
                'name' =>'magasin2',
                'email' => 'magasin2@gmail.com',
                'password' => Hash::make('123456'),
                'type_id' => '4'
            ],

            [
                'name' =>'magasin3',
                'email' => 'magasin3@gmail.com',
                'password' => Hash::make('123456'),
                'type_id' => '4'
            ]
            );


        DB::table('user_adresses')->insert(
            [
                'user_id' =>'1',
                'latitude' => '-11.66494',
                'longitude' => '27.4837274'
            ],
            [
                'user_id' =>'2',
                'latitude' => '-11.664961',
                'longitude' => '27.494757'
            ],

            [
                'user_id' =>'3',
                'latitude' => '-11.662744',
                'longitude' => '27.4835043'
            ]
        );

    }
}
