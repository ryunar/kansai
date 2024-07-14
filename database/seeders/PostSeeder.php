<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'user_id'=>1,
        'category_id'=>1, 
        'prefecture_id'=>1,
        'title'=>'aosaka',
        'body'=>'damiya',
        'image_url'=>'', 
            ]);
        DB::table('posts')->insert([
            'user_id'=>2,
        'category_id'=>2, 
        'prefecture_id'=>1,
        'title'=>'amiyasaka',
        'body'=>'damasiya',
        'image_url'=>'', 
            ]);
         DB::table('posts')->insert([
            'user_id'=>1,
        'category_id'=>3, 
        'prefecture_id'=>1,
        'title'=>'araihaka',
        'body'=>'hakuseki',
        'image_url'=>'', 
            ]);
         DB::table('posts')->insert([
            'user_id'=>2,
        'category_id'=>4, 
        'prefecture_id'=>1,
        'title'=>'tomono',
        'body'=>'iwakura',
        'image_url'=>'', 
            ]);
            
        DB::table('posts')->insert([
            'user_id'=>1,
        'category_id'=>1, 
        'prefecture_id'=>1,
        'title'=>'aosaka2',
        'body'=>'damiya2',
        'image_url'=>'', 
            ]);
        DB::table('posts')->insert([
            'user_id'=>2,
        'category_id'=>2, 
        'prefecture_id'=>1,
        'title'=>'amiyasaka2',
        'body'=>'damasiya2',
        'image_url'=>'', 
            ]);
         DB::table('posts')->insert([
            'user_id'=>1,
        'category_id'=>3, 
        'prefecture_id'=>1,
        'title'=>'araihaka2',
        'body'=>'hakuseki2',
        'image_url'=>'', 
            ]);
         DB::table('posts')->insert([
            'user_id'=>2,
        'category_id'=>4, 
        'prefecture_id'=>1,
        'title'=>'tomono2',
        'body'=>'iwakura2',
        'image_url'=>'', 
            ]);      
            
        
    }
}
