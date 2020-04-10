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
        $this->call(User::class);
        $this->call(Category::class);
        $this->call(Product::class);
        $this->call(Order::class);
        $this->call(Product_Order::class);
        $this->call(Product_Comment::class);
        $this->call(Client::class);
        $this->call(Contact::class);
        $this->call(Wishlist::class);
    }
}
