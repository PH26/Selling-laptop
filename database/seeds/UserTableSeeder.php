<?php
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTime = date('Y-m-d H:i:s');
        DB::table('users')->insert([
            [
                'id'=>1,
                'name'=> 'typhan',
                'email'=>'typhan0112@gmail.com',
                'password'=> bcrypt('123456'),
                'user_type' => 1,
                'ac'=> 1,
                'created_at'=>$currentTime,
                'updated_at'=>$currentTime
            ],
            [
                'id'=>2,
                'name'=> 'typhan2',
                'email'=>'typhan1998@gmail.com',
                'password'=> bcrypt('123456'),
                'user_type' => 1,
                'ac'=> 1,
                'created_at'=>$currentTime,
                'updated_at'=>$currentTime
            ],
            [
                'id'=>3,
                'name'=> 'tu',
                'email'=>'tu@gmail.com',
                'password'=> bcrypt('123456'),
                'user_type' => 1,
                'ac'=> 1,
                'created_at'=>$currentTime,
                'updated_at'=>$currentTime
            ],
            [
                'id'=>4,
                'name'=> 'heo',
                'email'=>'heo@gmail.com',
                'password'=> bcrypt('123456'),
                'user_type' => 1,
                'ac'=> 1,
                'created_at'=>$currentTime,
                'updated_at'=>$currentTime
            ]
        ]);
    }
}