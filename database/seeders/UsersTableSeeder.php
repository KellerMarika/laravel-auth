<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    /*    $Admin = [
            'name' => 'Carolina',
            'surname' => 'Durina',
            'birth_date' => '10-10-1993',
            'email' => "CarolinaDurina93@libero.com",
            'password' => '123stella',
        ]; */

        User::factory()->create([
            'name' => 'Carolina',
            'surname' => 'Durina',
            'birth_date' =>  strtotime("2022-06-06"), "\n",
            'password' => '123stella',
            'is_admin'=>true,


         /* non può funzionare */   'email' => "CarolinaDurina93@libero.com",
        ]);
    }
}
