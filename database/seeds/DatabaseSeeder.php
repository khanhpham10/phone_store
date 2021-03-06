<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProducersTableSeeder::class);
        $this->call(PaymentMethodsTableSeeder::class);
        $this->call(ordersTableSeeder::class);
        $this->call(postsTableSeeder::class);
        $this->call(productsTableSeeder::class);
        $this->call(product_detailsTableSeeder::class);
        $this->call(product_imagesTableSeeder::class);
        $this->call(promotionsTableSeeder::class);
        $this->call(product_votesTableSeeder::class);
        $this->call(order_detailsTableSeeder::class);
    }
}
