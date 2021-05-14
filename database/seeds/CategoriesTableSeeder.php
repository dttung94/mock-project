<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        $user = DB::table('categories')->insert([
                'id' => '1',

                'name' => 'Xu ly ve xe cho nhan vien', //tao ten roi vao db sua


                'created_at' => $faker->datetimeBetween('-5 months')
            ]
        );

    }
}
