<?php

use Illuminate\Database\Seeder;

class order_detailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];

        $order_id = ["1", "2", "3", "4"];
        $product_detail_id = ["33", "33", "33", "30"];
        $quantity = ["1", "1", "1", "3"];
        $price = ["33990000", "33990000", "33990000", "22990000"];
        $created_at = ["2019-12-24 01:30:57", "2019-12-24 01:32:16", "2019-12-25 14:27:36", "2019-12-25 14:35:38"];
        $updated_at = ["2019-12-24 01:30:57", "2019-12-24 01:32:16", "2019-12-25 14:27:36", "2019-12-25 14:35:38"];
        for ($i=1; $i <= count($order_id); $i++) {
            array_push($list, [
                'id'                             => $i,
                'order_id'                       => $order_id[$i-1],
                'product_detail_id'              => $product_detail_id[$i-1],
                'quantity'                       => $quantity[$i-1],
                'price'                          => $price[$i-1],
                'created_at'                     => $created_at[$i-1],
                'updated_at'                     => $updated_at[$i-1],
            ]);
        }
        DB::table('order_details')->insert($list);
    }
}
