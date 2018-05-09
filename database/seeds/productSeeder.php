<?php

use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert(
        [
            [  'name' => 'Scuurspons',
                'description' => 'prachtige schuurspons voor de vaatwas',
                'price' => '9,98',
                'cover_image' => '', 
            ]
                
        ]);  
    }
}
