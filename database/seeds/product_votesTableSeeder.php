<?php

use Illuminate\Database\Seeder;

class product_votesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_votes')->insert([
            'product_id' => '14',
            'user_id' =>  '2',
            'rate' =>  '3.5',
            'content' =>  'Sản phẩm chính hãng, đóng gói cẩn thận, nhưng giá hơi cao.',
            'created_at'    =>  "2019-12-24 01:10:58",
            'updated_at'    =>  "2019-12-24 01:10:58",
        ]);
    }
}
