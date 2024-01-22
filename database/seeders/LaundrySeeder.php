<?php

namespace Database\Seeders;

use App\Models\Laundry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaundrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $laundryes = [
            [
                'claim_code'=>'Promo2024',
                'user_id'=>1,
                'shop_id'=>1,
                'weight'=>3.3,
                'with_pickup'=>1,
                'with_delivery'=>1,
                'pickup_address'=>'Lorem, ipsum dolor.',
                'delivery_address'=>'Lorem ipsum dolor sit.',
                'total'=>3,
                'description'=>'Lorem ipsum dolor sit amet.',
                'status'=>'Done',
            ],
            [
                'claim_code' => 'Promo2024',
                'user_id' => 1,
                'shop_id' => 1,
                'weight' => 3.3,
                'with_pickup' => 1,
                'with_delivery' => 1,
                'pickup_address' => 'Rumahku di Jalan Merdeka No. 10',
                'delivery_address' => 'Kantorku di Jalan Diponegoro No. 12',
                'total' => 300000,
                'description' => 'Pesan nasi goreng dan ayam goreng',
                'status' => 'Done',
              ],
              [
                'claim_code' => 'Promo2024',
                'user_id' => 2,
                'shop_id' => 2,
                'weight' => 2.2,
                'with_pickup' => 1,
                'with_delivery' => 1,
                'pickup_address' => 'Perumahan Pondok Indah Blok A No. 10',
                'delivery_address' => 'Apartemen Sahid Sudirman Lantai 12',
                'total' => 200000,
                'description' => 'Pesan pizza dan ice cream',
                'status' => 'Pending',
              ],
              [
                'claim_code' => 'Promo2024',
                'user_id' => 3,
                'shop_id' => 3,
                'weight' => 1.1,
                'with_pickup' => 0,
                'with_delivery' => 1,
                'pickup_address' => 'Sekolahku di Jalan Kartini No. 5',
                'delivery_address' => 'Rumah nenekku di Jalan Semeru No. 1',
                'total' => 100000,
                'description' => 'Pesan susu dan roti',
                'status' => 'Done',
              ],
              [
                'claim_code' => 'Promo2024',
                'user_id' => 4,
                'shop_id' => 4,
                'weight' => 4.4,
                'with_pickup' => 1,
                'with_delivery' => 1,
                'pickup_address' => 'Kostku di Jalan Gatot Subroto No. 100',
                'delivery_address' => 'Kantor temanku di Jalan Sudirman No. 101',
                'total' => 400000,
                'description' => 'Pesan ayam bakar dan nasi uduk',
                'status' => 'Expired',
              ],
              [
                'claim_code' => 'Promo2024',
                'user_id' => 5,
                'shop_id' => 5,
                'weight' => 5.5,
                'with_pickup' => 1,
                'with_delivery' => 1,
                'pickup_address' => 'Rumahku di Jalan Thamrin No. 1',
                'delivery_address' => 'Pantai Ancol',
                'total' => 500000,
                'description' => 'Pesan seafood dan es kelapa muda',
                'status' => 'Done',
              ]
        ];

        foreach ($laundryes as $laundryItem){
            Laundry::create($laundryItem);
        }
    }
}
