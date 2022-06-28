<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'title' => 'Jazzmaster',
                'slug' => 'jazzmaster',
                'product_image' => 'img/featured1.png',
                'product_description' => 'A luxurious lifestyle with this timepiece from Hublot. Featuring a black ceramic dial with a two-tone blue star pattern design on hour markers, this watch offers a subtle yet sophisticated look. The Miyota 9132-20 movement is designed with a programmed power reserve of 72 hours and powers the watch via a powerful C9 Gloriette movement. The case is crafted in 18k rose gold, while the strap is made of black alligator.',
                'price' => '2000000',
                'is_sale' => true,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ],
            [
                'title' => 'Ingersoll',
                'slug' => 'ingersoll',
                'product_image' => 'img/featured2.png',
                'product_description' => 'A luxurious lifestyle with this timepiece from Hublot. Featuring a black ceramic dial with a two-tone blue star pattern design on hour markers, this watch offers a subtle yet sophisticated look. The Miyota 9132-20 movement is designed with a programmed power reserve of 72 hours and powers the watch via a powerful C9 Gloriette movement. The case is crafted in 18k rose gold, while the strap is made of black alligator.',
                'price' => '3000000',
                'is_sale' => true,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ],
                [
                'title' => 'Ingersoll',
                'slug' => 'ingersoll',
                'product_image' => 'img/featured2.png',
                'product_description' => 'A luxurious lifestyle with this timepiece from Hublot. Featuring a black ceramic dial with a two-tone blue star pattern design on hour markers, this watch offers a subtle yet sophisticated look. The Miyota 9132-20 movement is designed with a programmed power reserve of 72 hours and powers the watch via a powerful C9 Gloriette movement. The case is crafted in 18k rose gold, while the strap is made of black alligator.',
                'price' => '3000000',
                'is_sale' => false,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ],
    ];
    Product::insert($products);
    }
}
