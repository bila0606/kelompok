<?php

namespace Database\Seeders;

use App\Models\DtPengguna;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DtPengguna::create([
        'name' => 'nabila',
        'email' => 'nabila@gmail.com',
        'password' => bcrypt('123456789'),
        'namerole' => 'administrator',
        'isrole' => 1
      ]);
    }
}
