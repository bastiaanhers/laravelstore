<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
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
            [  'name' => 'Scuurspons rood',
                'description' => 'prachtige schuurspons voor de vaat',
                'price' => '9.98'
            ],
            [  'name' => 'Scuurspons groen',
            'description' => 'prachtige schuurspons voor de vaat',
            'price' => '9.98'
            ],
            [  'name' => 'Scuurspons blauw',
            'description' => 'prachtige schuurspons voor de vaat',
            'price' => '9.98'
            ],
            [  'name' => 'Scuurspons orange',
            'description' => 'prachtige schuurspons voor de vaat',
            'price' => '9.98'
            ],
            [  'name' => 'Scuurspons paars',
            'description' => 'prachtige schuurspons voor de vaat',
            'price' => '9.98',
            ],
            [  'name' => 'Zachte spons rood',
            'description' => 'prachtige spons die net wat zachter is dan de gemiddelde spons. Voor dure vaat ',
            'price' => '19.98',
            ],
            [  'name' => 'Zachte spons groen',
            'description' => 'prachtige spons die net wat zachter is dan de gemiddelde spons. Voor dure vaat ',
            'price' => '19.98',
            ],
            [  'name' => 'Zachte spons blauw',
            'description' => 'prachtige spons die net wat zachter is dan de gemiddelde spons. Voor dure vaat ',
            'price' => '19.98',
            ],
            [  'name' => 'Zachte spons orange',
            'description' => 'prachtige spons die net wat zachter is dan de gemiddelde spons. Voor dure vaat ',
            'price' => '19.98',
            ],
            [  'name' => 'Zachte spons paars',
            'description' => 'prachtige spons die net wat zachter is dan de gemiddelde spons. Voor dure vaat ',
            'price' => '19.98',
            ],
        ]);  
    }
}
