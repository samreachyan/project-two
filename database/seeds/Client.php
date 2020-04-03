<?php

use Illuminate\Database\Seeder;

class Client extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client')->delete();
        DB::table('client')->insert([
            ['id'=>1, 'name'=>'Sinato','email'=> 'sinat@gmail.com','password'=>bcrypt('123456'), 'address' =>'KTX B7 Hanoi', 'phone'=> '0123654788'],
            ['id'=>2, 'name'=>'Khmer','email'=> 'khmer@gmail.com','password'=>bcrypt('123456'), 'address'=>'KTX B7 Hanoi', 'phone'=> '0123654788']
        ]);
    }
}
