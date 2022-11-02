<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $file = fopen(public_path('csv/users_otro.csv'), 'r');

        while (($data = fgetcsv($file)) !== false) {
            User::create([
                'name' => $data[1],
                'email' => $data[0],
                'correo' => $data[2],
                'password' => Hash::make($data[0]),
                'number_identification' => $data[0],
                'type_identification' => $data[3],
            ]);
        }
    }
}
