<?php

namespace Database\Seeders;


use App\Models\customers;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
      

            customers::create([
                'nama' => 'Jihad al fath',
                'gender' => 'Laki-laki',
                'email' => 'hiyyayyay@gmail.com',
                'phone' => '089662719963',
            ]);
            customers::create([
                'nama' => 'Tatang',
                'gender' => 'Laki-laki',
                'email' => 'Akucintafreefire@gmail.com',
                'phone' => '089662719963',
    
    
    
            
            ]);
    
        
        
        }
    
}