<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('categories')->insert([
            'name'=>'建物',
         
            ]);
        DB::table('categories')->insert([
            'name'=>'工芸品',
         
            ]);
         DB::table('categories')->insert([
            'name'=>'景色',
         
            ]);  
         DB::table('categories')->insert([
            'name'=>'食べ物',
         
            ]);    
    }
}
