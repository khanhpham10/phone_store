<?php

use Illuminate\Database\Seeder;

class advertisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];

        $product_id = Null;
        $title = ["Đặt trước Mi 9 CTY Giá rẻ hơn 1 triệu", "Redmi Note 7 CTY Giảm thẳng 200K", "Mua Mi 8 hoặc Mi 8 SE Giá rẻ, có trả góp", "Phụ kiện iWalk Mua 1 được 2", "Mua iPhone X Không lo rơi vỡ", "Sắm NOKIA quà bao la", "VIVO Y91C giá siêu sốc", "Ưu đã quà tặng khi mua Galaxy S10 hoặc S10+"];
        $image = ["1577093717_slider_5.jpg", "1577093741_slider_4.jpg", "1577093789_slider_3.jpg", "1577093814_slider_2.jpg", "1577093857_slider_1.jpg", "1577093911_cate_3.jpg", "1577093953_cate_2.jpg", "1577094001_cate_1.jpg"];
        $at_home_page = ["1", "1", "1", "1", "1", "0", "0", "0"];
        $start_date = ["2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23", "2019-12-23"];
        $end_date = ["2020-01-23", "2020-01-23", "2020-01-23", "2020-01-23", "2020-01-23", "2020-01-23", "2020-01-23", "2020-01-23"];
        $created_at = ["2019-12-23 16:35:18", "2019-12-23 16:35:41", "2019-12-23 16:36:29", "2019-12-23 16:36:54", "2019-12-23 16:37:37", "2019-12-23 16:38:31", "2019-12-23 16:39:13", "2019-12-23 16:40:01"];
        $updated_at = ["2019-12-23 16:35:18", "2019-12-23 16:35:41", "2019-12-23 16:36:29", "2019-12-23 16:36:54", "2019-12-23 16:37:37", "2019-12-23 16:38:31", "2019-12-23 16:39:13", "2019-12-23 16:40:01"];

        
        for ($i=1; $i <= count($image); $i++) {
            array_push($list, [
                'id'                        => $i,
                'product_id'                => $product_id,
                'title'                     => $title[$i-1],
                'image'                     => $image[$i-1],
                'at_home_page'              => $at_home_page[$i-1],
                'start_date'                => $start_date[$i-1],
                'end_date'                  => $end_date[$i-1],
                'created_at'                => $created_at[$i-1],
                'updated_at'                => $updated_at[$i-1],
            ]);
        }
        DB::table('advertises')->insert($list);
    }
}
