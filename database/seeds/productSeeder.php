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
                'price' => '10',
                'cover_image' => 'cover/zout.jpg', 
            ],
            [   'name' => 'Keuken zout',
                'description' => 'Zout voor in de keuken.',
                'price' => '10' ,
                'cover_image' => 'cover/zout.jpg',              
            ],
            [   'name' => 'Zee zout',
                'description' => 'Zout gestolen van vissen.',
                'price' => '10' ,
                'cover_image' => 'cover/zout.jpg',
            ],
            [   'name' => 'Strooizout',
                'description' => 'Goedkope troep voor de stoep.',
                'price' => '10' ,
                'cover_image' => 'cover/zout.jpg',                
            ],
            [   'name' => 'salt',
                'description' => 'Zout met een brits accent.',
                'price' => '10' ,
                'cover_image' => 'cover/zout.jpg', 
            ],     
            [   'name' => 'Magnesiumsulfaat',
                'description' => 'magnesiumsulfaat (bitterzout) ook wel Engels- of Epsomzout genoemd is een traditioneel huismiddel voor de uiterlijke verzorging van het lichaam, vooral de armen, rug en benen.',
                'price' => '10' ,
                'cover_image' => 'cover/zout.jpg', 
            ],     
            [   'name' => 'Nat Zout',
                'description' => 'PEKEL',
                'price' => '10' ,
                'cover_image' => 'cover/zout.jpg', 
            ],    
            [   'name' => 'goedkoop Zout',
                'description' => 'Zout uit polen.',
                'price' => '10' ,
                'cover_image' => 'cover/zout.jpg', 
            ],            
            [   'name' => 'Enkele zout korrel',
                'description' => 'Een speciaal uitgekozen zout korrel van zeer hoog kwaliteit.',
                'price' => '100' ,
                'cover_image' => 'cover/zout.jpg', 
            ],        
            [   'name' => 'Onthardingszout',
                'description' => 'Klapt alle kalk uit de water.',
                'price' => '10',
                'cover_image' => 'cover/zout.jpg', 
            ],
                
        ]);  
    }
}
