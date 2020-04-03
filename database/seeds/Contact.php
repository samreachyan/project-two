<?php

use Illuminate\Database\Seeder;

class Contact extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->delete();
        DB::table('contact')->insert([
            ['id'=>1, 'name'=> 'Samreach', 'email'=> 'samreach@gmail.com', 'subject'=>'Report Product A', 'message'=> 'This is project is broken while shipping to me. Thanks'],
        ]);
    }
}
