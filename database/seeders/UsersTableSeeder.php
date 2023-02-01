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
            'birth_date' => '10-10-1993',
            'email' => "CarolinaDurina93@libero.com",
            'password' => '123stella',
            'is_admin'=>true
        ]);
    }
}
/* $table->id();
$table->string('name')->comment('col-6');
$table->string('surname')->comment('col-6');
$table->date('birth_date')->comment('col-4');
$table->string('email')->unique()->comment('col-4');
$table->string('password')->comment('col-4');
$table->boolean('is_admin')->default(false);
$table->timestamp('email_verified_at')->nullable();
$table->rememberToken();
$table->timestamps(); */