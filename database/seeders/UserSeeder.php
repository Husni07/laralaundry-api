<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users =[
            [
                'username' =>'admin',
                'email' =>'admin@admin.com',
                'password' =>Hash::make('P@ssw0rd')
            ],
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
