<?php

use Illuminate\Database\Seeder;

class promotionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];

        $product_id = ["1", "1", "2", "2", "2", "2", "3", "3", "4", "5", "6", "6", "6", "7", "7", "8", "8", "9", "9", "9", "9", "10", "10", "11", "11", "11", "12", "12", "13", "13", "13", "14", "14"];
        $content = ["Phiếu mua hàng trị giá 3,5 triệu (được quy đổi thành tiền mặt)", "Mua kèm Apple Watch S3 giảm 500,000đ, S5 giảm 1 triệu, AirPods giảm 10% (Không áp dụng với khuyến mãi khác)", "Trả góp 0%", "Tặng Đế sạc không dây", "Tặng Vòng tay công nghệ Huawei Talk Bank B5", "Tặng Ốp lưng nắp gập", "Giá đặc biệt khi mua Online đến 10/03: 3,790,000đ", "Trả góp 0%", "Trả góp 0%", "Trả góp 0%", "Vòng tay thông minh Galaxy Fit e (màu đen)", "Giảm ngay 500.000đ (đã trừ vào giá)", "Phiếu mua hàng Samsung trị giá 150.000đ", "Trả gop 0%", "Ưu đãi phòng chờ hạng thương gia và Ưu đãi Samsung Pay tại Starbucks", "Phiếu mua hàng trị giá 1,5 triệu (được quy đổi thành tiền mặt)", "Mua kèm Apple Watch S3 giảm 500,000đ, S5 giảm 1 triệu, AirPods giảm 10% (Không áp dụng với khuyến mãi khác)", "Trả góp lãi suất 0% qua công ty tài chính và thẻ tín dụng.", "Phiếu mua hàng Samsung 4 triệu.", "Bảo hiểm rơi vỡ 1 năm.", "Ưu đãi phòng chờ hạng thương gia.", "Phiếu mua hàng trị giá 600.000đ (được quy đổi thành tiền mặt)", "Mua kèm Apple Watch S3 giảm 500,000đ, S5 giảm 1 triệu, AirPods giảm 10% (Không áp dụng với khuyến mãi khác)", "Vòng đeo tay Galaxy Fit (màu bạc)", "Trả góp 0% qua thẻ tín dụng", "Giảm ngay 3 triệu qua quà tặng Galaxy", "Phiếu mua hàng trị giá 1,2 triệu (được quy đổi thành tiền mặt)", "Mua kèm Apple Watch S3 giảm 500,000đ, S5 giảm 1 triệu, AirPods giảm 10% (Không áp dụng với khuyến mãi khác)", "Giảm ngay 3 triệu qua quà tặng Galaxy", "Giảm ngay 2 triệu (áp dụng cho đơn hàng đặt và nhận hàng trong ngày 23 - 26/12) (đã trừ vào giá)", "Thu cũ đổi mới Note 10 trợ giá đến 4,5 triệu", "Phiếu mua hàng trị giá 1,2 triệu (được quy đổi thành tiền mặt)", "Mua kèm Apple Watch S3 giảm 500,000đ, S5 giảm 1 triệu, AirPods giảm 10% (Không áp dụng với khuyến mãi khác)"];
        $start_date = ["2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-25", "2019-12-25", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23"];
        $end_date = "2020-01-23";
        $created_at = ["2019-12-23 17:14:55", "2019-12-23 17:14:55", "2019-12-23 18:05:09", "2019-12-23 18:05:09", "2019-12-23 18:05:09", "2019-12-23 18:05:09", "2019-12-23 21:40:00", "2019-12-23 21:40:00", "2019-12-23 21:48:41", "2019-12-23 22:02:25", "2019-12-23 22:11:06", "2019-12-23 22:11:06", "2019-12-23 22:11:06", "2019-12-23 22:18:16", "2019-12-23 22:18:16", "2019-12-23 22:24:06", "2019-12-23 22:24:06", "2019-12-23 22:43:47", "2019-12-23 22:43:47", "2019-12-23 22:43:47", "2019-12-23 22:43:47", "2019-12-23 22:49:42", "2019-12-23 22:49:42", "2019-12-23 22:57:53", "2019-12-23 22:57:53", "2019-12-23 22:57:53", "2019-12-23 23:05:01", "2019-12-23 23:05:01", "2019-12-23 23:14:18", "2019-12-23 23:14:19", "2019-12-23 23:14:19", "2019-12-23 23:21:17", "2019-12-23 23:21:17"];
        $updated_at = ["2019-12-23 17:14:55", "2019-12-23 17:14:55", "2019-12-23 18:05:09", "2019-12-23 18:05:09", "2019-12-23 18:05:09", "2019-12-23 18:05:09", "2019-12-23 21:40:00", "2019-12-23 21:40:00", "2019-12-23 21:48:41", "2019-12-23 22:02:25", "2019-12-23 22:11:06", "2019-12-23 22:11:06", "2019-12-23 22:11:06", "2019-12-23 22:18:16", "2019-12-23 22:18:16", "2019-12-23 22:24:06", "2019-12-23 22:24:06", "2019-12-23 22:43:47", "2019-12-23 22:43:47", "2019-12-23 22:43:47", "2019-12-23 22:43:47", "2019-12-23 22:49:42", "2019-12-23 22:49:42", "2019-12-23 22:57:53", "2019-12-23 22:57:53", "2019-12-23 22:57:53", "2019-12-23 23:05:01", "2019-12-23 23:05:01", "2019-12-23 23:14:18", "2019-12-23 23:14:19", "2019-12-23 23:14:19", "2019-12-23 23:21:17", "2019-12-23 23:21:17"];
        for ($i=1; $i <= count($product_id); $i++) {
            array_push($list, [
                'id'                             => $i,
                'product_id'                     => $product_id[$i-1],
                'content'                        => $content[$i-1],
                'start_date'                     => $start_date[$i-1],
                'end_date'                       => $end_date,
                'created_at'                     => $created_at[$i-1],
                'updated_at'                     => $updated_at[$i-1],
            ]);
        }
        DB::table('promotions')->insert($list);
    }
}
