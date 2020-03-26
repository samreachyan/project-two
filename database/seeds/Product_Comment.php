<?php

use Illuminate\Database\Seeder;

class Product_Comment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_comment')->delete();
        DB::table('product_comment')->insert([
            ['name'=>'Samreach', 'email'=> 'samreach@gmail.com', 'describe'=> 'This is a good product i ever seen', 'product_id'=> 1],
            ['name'=>'Samreach', 'email'=> 'samreach@gmail.com', 'describe'=> 'This is a good product i ever seen', 'product_id'=> 2],
            ['name'=>'Samreach', 'email'=> 'helloeach@gmail.com', 'describe'=> 'This is a good product i ever seen', 'product_id'=> 3],
            ['name'=>'Samreach', 'email'=> 'helloefasach@gmail.com', 'describe'=> 'This is a good product i ever seen', 'product_id'=> 2],
            ['name'=>'Samreach', 'email'=> 'samreach@gmail.com', 'describe'=> 'This is a good product i ever seen', 'product_id'=> 4],
            ['name'=>'Samreach', 'email'=> 'samreach@gmail.com', 'describe'=> 'This is a good product i ever seen', 'product_id'=> 5],
            ['name'=>'Samreach', 'email'=> 'samreachtube@gmail.com', 'describe'=> 'This is a good product i ever seen yoiu', 'product_id'=> 5],
            ['name'=>'Samreach', 'email'=> 'samreachhaha@gmail.com', 'describe'=> 'This is a good product i ever seen', 'product_id'=> 6],
            ['name'=>'Samreach', 'email'=> 'yahhoach@gmail.com', 'describe'=> 'This is a good product i ever seen', 'product_id'=> 7],
            ['name'=>'Samreach', 'email'=> 'hahaeach@gmail.com', 'describe'=> 'This is a good product i ever seen', 'product_id'=> 8],

        ]);
    }
}
