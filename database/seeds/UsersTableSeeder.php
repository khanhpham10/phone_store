<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' =>  'admin@gmail.com',
            'admin'    =>  1,
            'active'    =>  1,
            'phone'    =>  '0967247995',
            'address'    =>  'NinhKieu-CầnTho',
            'avatar_image'    =>  '1577128193_avatar.jpg',
            'password'  =>  bcrypt('admin@123'),
            'created_at'    =>  date('Y-m-d H:i:s', strtotime('now')),
            'updated_at'    =>  date('Y-m-d H:i:s', strtotime('now')),
        ]);
        DB::table('users')->insert([
            'name' => 'Khánh Phạm',
            'email' =>  'Khanhphamlight@gmail.com',
            'admin'    =>  0,
            'active'    =>  1,
            'phone'    =>  '0967247998',
            'address'    =>  'NinhKieu-CầnTho',
            'avatar_image'    =>  '1577128193_avatar.jpg',
            'password'  =>  bcrypt('123456'),
            'created_at'    =>  date('Y-m-d H:i:s', strtotime('now')),
            'updated_at'    =>  date('Y-m-d H:i:s', strtotime('now')),
        ]);
    }
}
