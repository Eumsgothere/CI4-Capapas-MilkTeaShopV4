<?= view('components/head', ['page' => 'menu']); ?>
<?= view('components/header'); ?>

<main class="menu-page">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #fcebb7;
            color: #2f2f2f;
            margin: 0;
            padding: 0;
        }

        .menu-header {
            text-align: center;
            padding: 3rem 1rem 2rem;
        }

        .menu-header h1 {
            font-size: 2.5rem;
            color: #e36fa4;
        }

        .menu-header p {
            color: #555;
            font-size: 1rem;
            max-width: 600px;
            margin: 1rem auto;
        }

        .menu-section {
            max-width: 1000px;
            margin: 0 auto 4rem;
            padding: 0 2rem;
        }

        .menu-section h2 {
            color: #4a90e2;
            font-size: 1.8rem;
            border-bottom: 3px solid #f6b6c4;
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.5rem;
        }

        .menu-item {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            text-align: center;
            padding: 1rem;
            transition: transform 0.2s ease-in-out;
        }

        .menu-item:hover {
            transform: translateY(-5px);
        }

        .menu-item img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-radius: 8px;
        }

        .menu-item h3 {
            margin: 0.8rem 0 0.4rem;
            font-size: 1.2rem;
            color: #2f2f2f;
        }

        .menu-item p {
            color: #777;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .price {
            font-weight: bold;
            color: #e36fa4;
        }
    </style>

    <title>Miltank Tea Shop — Menu</title>

    <section class="menu-header">
        <h1>Pokémon Drinks Menu</h1>
        <p>Catch your cravings! Inspired by your favorite Pokémon and crafted with Miltank’s creamy touch 🩷</p>
    </section>

    <?php
    // Menu data
    $menuSections = [
        "Miltank's Milk Teas" => [
            [
                'imgSrc' => 'https://assets.epicurious.com/photos/629f98926e3960ec24778116/1:1/w_2560%2Cc_limit/BubbleTea_RECIPE_052522_34811.jpg',
                'imgAlt' => 'Miltank Classic Milk Tea',
                'title' => 'Miltank Classic Milk Tea',
                'desc' => 'Smooth, creamy, and perfectly sweet — Miltank’s favorite!',
                'price' => '₱125'
            ],
            [
                'imgSrc' => 'https://carmyy.com/wp-content/uploads/2022/01/Taro-Milk-Tea-13.jpg',
                'imgAlt' => 'Jigglypuff Taro Dream',
                'title' => 'Jigglypuff’s Taro Dream',
                'desc' => 'Soft purple blend of taro and milk that’ll sing you to sleep.',
                'price' => '₱135'
            ],
            [
                'imgSrc' => 'https://takestwoeggs.com/wp-content/uploads/2021/04/Brown-Sugar-Milk-Tea-Boba-Recipe-Takestwoeggs-Easy-Asian-Inspired-Recipes-sq.jpg',
                'imgAlt' => 'Snorlax Brown Sugar Boba',
                'title' => 'Snorlax Brown Sugar Boba',
                'desc' => 'Thick, cozy caramelized brown sugar syrup — for nap lovers.',
                'price' => '₱145'
            ],
            [
                'imgSrc' => 'https://sugaryums.com/wp-content/uploads/2022/02/Okinawa-Milk-Tea-SugarYums-1.jpg',
                'imgAlt' => 'Eevee Okinawa Milk Tea',
                'title' => 'Eevee Okinawa Milk Tea',
                'desc' => 'Sweet, balanced, and adaptable — just like Eevee!',
                'price' => '₱140'
            ]
        ],
        "Berry & Fruit Teas" => [
            [
                'imgSrc' => 'https://www.inkatrinaskitchen.com/wp-content/uploads/2020/05/Strawberry-Bubble-Tea-24-wm-600-500x500.jpg',
                'imgAlt' => 'Sylveon Strawberry Tea',
                'title' => 'Sylveon Strawberry Tea',
                'desc' => 'Sweet strawberry magic wrapped in pink perfection.',
                'price' => '₱130'
            ],
            [
                'imgSrc' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDEhAKXMg2FofFOEcP54lwIsTPLtSZtx8jig&s',
                'imgAlt' => 'Pikachu Mango Zap',
                'title' => 'Pikachu’s Mango Zap',
                'desc' => 'A burst of mango energy and electric flavor ⚡',
                'price' => '₱125'
            ],
            [
                'imgSrc' => 'https://cdn.foodaciously.com/static/recipes/9d082354-2258-46b7-8e5c-c9bf25dfcc25/lychee-bubble-tea-1ea47f1059d3b7645c0b2027979ccc58-1920-q80.jpg',
                'imgAlt' => 'Togepi Lychee Bliss',
                'title' => 'Togepi Lychee Bliss',
                'desc' => 'Soft, floral, and sweet — a surprise in every sip!',
                'price' => '₱120'
            ],
            [
                'imgSrc' => 'https://myveganminimalist.com/wp-content/uploads/2022/05/Honeydew-Melon-Milk-Tea-Boba-13.jpg',
                'imgAlt' => 'Bulbasaur Honeydew Pop',
                'title' => 'Bulbasaur Honeydew Pop',
                'desc' => 'Green melon freshness to keep you feeling sunny 🌿',
                'price' => '₱130'
            ]
        ],
        "Legendary Specials" => [
            [
                'imgSrc' => 'https://feelgoodfoodie.net/wp-content/uploads/2023/08/Matcha-Latte-TIMG.jpg',
                'imgAlt' => 'Celebi Matcha Latte',
                'title' => 'Celebi Matcha Latte',
                'desc' => 'Timeless green matcha with creamy milk — a true classic.',
                'price' => '₱145'
            ],
            [
                'imgSrc' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1h54sRdnqJLo75o3ZDPwjZ830lvfopnvo9g&s',
                'imgAlt' => 'Lugia Wintermelon Milk Tea',
                'title' => 'Lugia Wintermelon Milk Tea',
                'desc' => 'Smooth and mystical — calm like the sea guardian itself.',
                'price' => '₱140'
            ],
            [
                'imgSrc' => 'https://thai-foodie.com/wp-content/uploads/2024/09/thai-milk-tea-300x300.jpg',
                'imgAlt' => 'Charizard Thai Blaze Tea',
                'title' => 'Charizard Thai Blaze Tea',
                'desc' => 'Fiery orange Thai tea that ignites your taste buds 🔥',
                'price' => '₱150'
            ]
        ]
    ];
    ?>

    <?php foreach ($menuSections as $sectionTitle => $items): ?>
        <section class="menu-section">
            <h2><?= $sectionTitle ?></h2>
            <div class="menu-grid">
                <?php foreach ($items as $item): ?>
                    <?= view('components/cardmenu', [
                        'imgSrc' => $item['imgSrc'],
                        'imgAlt' => $item['imgAlt'],
                        'title' => $item['title'],
                        'desc' => $item['desc'],
                        'price' => $item['price']
                    ]) ?>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endforeach; ?>

</main>

<?= view('components/footer'); ?>