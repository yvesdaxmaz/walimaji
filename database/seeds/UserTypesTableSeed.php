 <?php

use Illuminate\Database\Seeder;

class UserTypesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create("fr_Fr");

        $data = [];
        $designation = [
            'trader', 'provider', 'producer', 'transformer','admin',
        ];

        for ($i = 0; $i < 5; $i++) {
            $data[] = [
                'designation' => $designation[$i % 5],
                'description' => $faker->text(50),
                'icon' => 'images/images.jpg'
            ];
        }
        DB::table('user_types')->insert($data);
    }
}
