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
            [  'name' => 'Zout',
            'description' => 'Natriumchloride of NaCl is bij kamertemperatuur een witte kristallijne stof met een kubische kristalvorm, die goed oplosbaar is in water.',
                'price' => '10' ],

            [  'name' => 'Keuken zout',
            'description' => 'Zout voor in de keuken.',
            'price' => '10' ,],

            [  'name' => 'Zee zout',
            'description' => 'Zout gestolen van vissen.',
            'price' => '10' ,],

            [  'name' => 'Strooizout',
            'description' => 'Goedkope troep voor de stoep.',
            'price' => '10' ,],

            [  'name' => 'salt',
            'description' => 'Zout met een brits accent.',
            'price' => '10' ,],

            [  'name' => 'Magnesiumsulfaat',
            'description' => 'magnesiumsulfaat (bitterzout) ook wel Engels- of Epsomzout genoemd is een traditioneel huismiddel voor de uiterlijke verzorging van het lichaam, vooral de armen, rug en benen.',
            'price' => '10' ,],

            [  'name' => 'Nat Zout',
            'description' => 'PEKEL',
            'price' => '10' ,], 

            [  'name' => 'goedkoop Zout',
            'description' => 'Zout uit polen.',
            'price' => '10' ,],

            [  'name' => 'Enkele zout korrel',
            'description' => 'Een speciaal uitgekozen zout korrel van zeer hoog kwaliteit.',
            'price' => '100' ,],

            [  'name' => 'Onthardingszout',
            'description' => 'Klapt alle kalk uit de water.',
            'price' => '10' ,]
        ]);  
    }
}
