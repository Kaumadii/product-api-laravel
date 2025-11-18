<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::insert([
            [
                'name'        => 'Wireless Headphones',
                'description' => 'Noise-cancelling over-ear wireless headphones.',
                'price'       => 149.99,
                'image_url'   => 'https://picsum.photos/300?random=1',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Smart Watch',
                'description' => 'Fitness tracking watch with heart-rate monitor.',
                'price'       => 89.99,
                'image_url'   => 'https://picsum.photos/300?random=2',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Gaming Mouse',
                'description' => 'High precision RGB gaming mouse.',
                'price'       => 39.99,
                'image_url'   => 'https://picsum.photos/300?random=3',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Bluetooth Speaker',
                'description' => 'Portable speaker with deep bass sound.',
                'price'       => 59.99,
                'image_url'   => 'https://picsum.photos/300?random=4',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Travel Backpack',
                'description' => 'Waterproof backpack ideal for travel and hiking.',
                'price'       => 49.99,
                'image_url'   => 'https://picsum.photos/300?random=5',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}

