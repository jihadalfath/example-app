<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\customers;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        customers::factory(10)->create();

        \App\Models\customers::factory()->create([
           'nama' => 'Test User',
          'gender' => 'Laki-laki','perempuan',
          'email' => 'test@example.com',
          'phone' => 'number',

       ]);
    }
}
