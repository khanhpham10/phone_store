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
    }
}
