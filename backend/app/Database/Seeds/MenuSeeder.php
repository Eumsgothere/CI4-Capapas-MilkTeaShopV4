<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        $menuItems = [
            // Miltank's Milk Teas
            [
                'name' => 'Miltank Classic Milk Tea',
                'description' => 'Smooth, creamy, and perfectly sweet — Miltank’s favorite!',
                'price' => 125.00,
                'image' => 'https://assets.epicurious.com/photos/629f98926e3960ec24778116/1:1/w_2560%2Cc_limit/BubbleTea_RECIPE_052522_34811.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Jigglypuff Taro Dream',
                'description' => 'Soft purple blend of taro and milk that’ll sing you to sleep.',
                'price' => 135.00,
                'image' => 'https://carmyy.com/wp-content/uploads/2022/01/Taro-Milk-Tea-13.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Snorlax Brown Sugar Boba',
                'description' => 'Thick, cozy caramelized brown sugar syrup — for nap lovers.',
                'price' => 145.00,
                'image' => 'https://takestwoeggs.com/wp-content/uploads/2021/04/Brown-Sugar-Milk-Tea-Boba-Recipe-Takestwoeggs-Easy-Asian-Inspired-Recipes-sq.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Eevee Okinawa Milk Tea',
                'description' => 'Sweet, balanced, and adaptable — just like Eevee!',
                'price' => 140.00,
                'image' => 'https://sugaryums.com/wp-content/uploads/2022/02/Okinawa-Milk-Tea-SugarYums-1.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            // Berry & Fruit Teas
            [
                'name' => 'Sylveon Strawberry Tea',
                'description' => 'Sweet strawberry magic wrapped in pink perfection.',
                'price' => 130.00,
                'image' => 'https://www.inkatrinaskitchen.com/wp-content/uploads/2020/05/Strawberry-Bubble-Tea-24-wm-600-500x500.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Pikachu Mango Zap',
                'description' => 'A burst of mango energy and electric flavor ⚡',
                'price' => 125.00,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDEhAKXMg2FofFOEcP54lwIsTPLtSZtx8jig&s',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Togepi Lychee Bliss',
                'description' => 'Soft, floral, and sweet — a surprise in every sip!',
                'price' => 120.00,
                'image' => 'https://cdn.foodaciously.com/static/recipes/9d082354-2258-46b7-8e5c-c9bf25dfcc25/lychee-bubble-tea-1ea47f1059d3b7645c0b2027979ccc58-1920-q80.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Bulbasaur Honeydew Pop',
                'description' => 'Green melon freshness to keep you feeling sunny 🌿',
                'price' => 130.00,
                'image' => 'https://myveganminimalist.com/wp-content/uploads/2022/05/Honeydew-Melon-Milk-Tea-Boba-13.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            // Legendary Specials
            [
                'name' => 'Celebi Matcha Latte',
                'description' => 'Timeless green matcha with creamy milk — a true classic.',
                'price' => 145.00,
                'image' => 'https://feelgoodfoodie.net/wp-content/uploads/2023/08/Matcha-Latte-TIMG.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Lugia Wintermelon Milk Tea',
                'description' => 'Smooth and mystical — calm like the sea guardian itself.',
                'price' => 140.00,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1h54sRdnqJLo75o3ZDPwjZ830lvfopnvo9g&s',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Charizard Thai Blaze Tea',
                'description' => 'Fiery orange Thai tea that ignites your taste buds 🔥',
                'price' => 150.00,
                'image' => 'https://thai-foodie.com/wp-content/uploads/2024/09/thai-milk-tea-300x300.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        $this->db->table('menu')->insertBatch($menuItems);
    }
}
