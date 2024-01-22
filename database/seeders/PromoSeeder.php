<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Promo;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $promos = [
            [
                'image'=>'imagePromo.jpg',
                'shop_id'=>1,
                'new_price'=>1,
                'old_price'=>1,
                'description'=>'Lorem ipsum dolor sit amet.',
            ],
            [
                'image'=>'imagePromo.jpg',
                'shop_id'=>3,
                'new_price'=>3,
                'old_price'=>3,
                'description'=>'Lorem ipsum dolor sit amet consectetur.',
            ]
        ];
        foreach($promos as $promoItem){
            Promo::create($promoItem);
        }
    }
}
