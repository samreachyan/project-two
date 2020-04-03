<?php

use Illuminate\Database\Seeder;

class Wishlist extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wishlist')->delete();
        DB::table('wishlist')->insert([ 
            ['id'=>'1', 'status'=> 1, 'client_id'=> 1, 'product_id'=> 2],
            ['id'=>'2', 'status'=> 1, 'client_id'=> 2, 'product_id'=> 3],
            ['id'=>'3', 'status'=> 1, 'client_id'=> 1, 'product_id'=> 4],
            ['id'=>'4', 'status'=> 1, 'client_id'=> 1, 'product_id'=> 5],
            ['id'=>'5', 'status'=> 1, 'client_id'=> 2, 'product_id'=> 6],
            ['id'=>'6', 'status'=> 1, 'client_id'=> 2, 'product_id'=> 8],
        ]);
    }
}
