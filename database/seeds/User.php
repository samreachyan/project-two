<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->delete();
        DB::table('user')->insert([
            ['id'=>1,'email'=>'admin@gmail.com','password'=>bcrypt('123456'),'full'=>'Samreach','address'=>'Thường tín','phone'=>'0356653301','level'=>1],
            ['id'=>2,'email'=>'zimpro@gmail.com','password'=>bcrypt('123456'),'full'=>'Reach','address'=>'Bắc giang','phone'=>'0356654487','level'=>2],
            ['id'=>3,'email'=>'phucnguyenthe0809@gmail.com','password'=>bcrypt('123456'),'full'=>'Nguyen Van A','address'=>'Huế','phone'=>'0352264487','level'=>1],
            ['id'=>4,'email'=>'zimpro9x@gmail.com','password'=>bcrypt('123456'),'full'=>'Nguyễn Văn Công','address'=>'Nghệ An','phone'=>'0357846659','level'=>2],
            ['id'=>5,'email'=>'samreach@gmail.com','password'=>bcrypt('123456'),'full'=>'Samreach Yan','address'=>'Phnom Penh','phone'=>'0522360380','level'=>2]
        ]);
        
    }
}
