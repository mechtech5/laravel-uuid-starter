<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
      	'username' => 'mechtech5',
      	'email' => 'mechtech5@jigsawme.in',
      	'password' => bcrypt('12345678'),
      	'created_at' => now(),
      	'updated_at' => now()
      ]);
    }
}
