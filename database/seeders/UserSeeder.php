<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrEmail = ['nam@gmail.com','nguyen@gmail.com','tien@gmail.com'];

        foreach ($arrEmail as $value){
            User::create([
                'name' => 'Nam',
                'email' => $value,
                'password' => Hash::make(12345678)
            ]);
        }

    }
}
