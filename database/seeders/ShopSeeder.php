<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shops = [
            [
                'image' => 'image1.jpg',
                'name' => 'John Smith',
                'location' => 'jalan bitcoins',
                'city' => 'rembang',
                'delivery' => 0,
                'pickup' => 0,
                'whatsapp' => '6212345678',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, incidunt?',
                'price' => '2',
                'rate' => 4.5,
            ],
            [
                'image' => 'image2.jpg',
                'name' => 'Jane Doe',
                'location' => 'jalan bitcoins lain',
                'city' => 'surabaya',
                'delivery' => 1,
                'pickup' => 1,
                'whatsapp' => '6287654321',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, incidunt?',
                'price' => '3',
                'rate' => 4.0,
            ],
            [
                'image' => 'image3.jpg',
                'name' => 'Michael Johnson',
                'location' => 'jalan bitcoins lain lagi',
                'city' => 'jakarta',
                'delivery' => 1,
                'pickup' => 0,
                'whatsapp' => '6298765432',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, incidunt?',
                'price' => '4',
                'rate' => 4.2,
            ],
            [
                'image' => 'image4.jpg',
                'name' => 'Emily Davis',
                'location' => 'jalan bitcoins baru',
                'city' => 'bandung',
                'delivery' => 0,
                'pickup' => 1,
                'whatsapp' => '6212345678',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, incidunt?',
                'price' => '5',
                'rate' => 4.8,
            ],
            [
                'image' => 'image5.jpg',
                'name' => 'Daniel Miller',
                'location' => 'jalan bitcoins terbaru',
                'city' => 'yogyakarta',
                'delivery' => 1,
                'pickup' => 1,
                'whatsapp' => '6212345678',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, incidunt?',
                'price' => '6',
                'rate' => 4.6,
            ],
        ];

        foreach ($shops as $shopItem){
            Shop::create($shopItem);
        }
    }
}
