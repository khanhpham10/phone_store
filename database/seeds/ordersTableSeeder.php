<?php

use Illuminate\Database\Seeder;

class ordersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];

        $user_id = ["2", "2", "2", "2"];
        $status = ["1", "1", "1", "1"];
        $payment_method_id = ["1", "2", "2", "1"];
        $order_code = ["PSO16739", "PSO36441", "PSO57787", "PSO13318"];
        $name = ["Khanh Pham", "Khanh Pham", "Khanh Pham", "Khanh Pham"];
        $email = ["Khanhphamlight@gmail.com", "Khanhphamlight@gmail.com", "Khanhphamlight@gmail.com", "Khanhphamlight@gmail.com"];
        $phone = ["0967247995", "0967247995", "0967247995", "0967247995"];
        $address = ["NinhKieu-CầnThơ", "NinhKieu-CầnThơ", "NinhKieu-CầnThơ", "NinhKieu-CầnThơ"];
        $created_at = ["2019-12-24 01:30:56", "2019-12-24 01:32:16", "2019-12-25 14:27:36", "2019-12-25 14:35:38"];
        $updated_at = ["2019-12-24 01:30:56", "2019-12-24 01:32:16", "2019-12-25 14:27:36", "2019-12-25 14:35:38"];
        for ($i=1; $i <= count($user_id); $i++) {
            array_push($list, [
                'id'                        => $i,
                'user_id'                   => $user_id[$i-1],
                'payment_method_id'         => $payment_method_id[$i-1],
                'order_code'                => $order_code[$i-1],
                'name'                      => $name[$i-1],
                'email'                     => $email[$i-1],
                'phone'                     => $phone[$i-1],
                'address'                   => $address[$i-1],
                'status'                    => $status[$i-1],
                'created_at'                => $created_at[$i-1],
                'updated_at'                => $updated_at[$i-1],
            ]);
        }
        DB::table('orders')->insert($list);
    }
}
