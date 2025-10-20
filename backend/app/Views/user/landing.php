<!DOCTYPE html>
<html lang="en">

<?= view('components/head', ['page' => 'landing']); ?>

<body>

    <div class="banner">
        <img src="/banners.png" alt="Miltank Tea Shop Banner">
    </div>

    <?= view('components/header'); ?>

    <section class="hero">
        <h2>🧋 Refreshing Happiness in Every Sip 🧋</h2>
        <p>
            At Miltank Tea Shop, we serve happiness in a cup. From creamy classics to fruity flavors, our drinks are crafted to brighten your day! Visit us and discover your new favorite tea or introduce you to your new favorite Pokémon!!
        </p>
    </section>

    <section>
        <h2>Our Best Sellers</h2>
        <div class="best-sellers">
            <?= view('components/card', [
                'imgSrc' => 'https://assets.epicurious.com/photos/629f98926e3960ec24778116/1:1/w_2560%2Cc_limit/BubbleTea_RECIPE_052522_34811.jpg',
                'title' => 'Classic Pearl Milk Tea',
                'desc' => 'Rich black tea, creamy milk, and chewy pearls.'
            ]) ?>

            <?= view('components/card', [
                'imgSrc' => 'https://www.inkatrinaskitchen.com/wp-content/uploads/2020/05/Strawberry-Bubble-Tea-24-wm-600-500x500.jpg',
                'title' => 'Strawberry Milk Tea',
                'desc' => 'Refreshing pink tea with real strawberry flavor.'
            ]) ?>

            <?= view('components/card', [
                'imgSrc' => 'https://feelgoodfoodie.net/wp-content/uploads/2023/08/Matcha-Latte-TIMG.jpg',
                'title' => 'Matcha Latte',
                'desc' => 'Earthy matcha balanced with creamy sweetness.'
            ]) ?>
        </div>
    </section>

    <div style="text-align:center; margin-top:1.5rem;">
        <?= view('components/button', [
            'btnText' => 'See Full Menu',
            'btnType' => 'primary',
            'btnLink' => '/menu'
        ]) ?>
    </div>

    <section class="about-us">
        <h2>About Us</h2>
        <div class="about-container">
            <div class="about-text">
                <p>
                    Miltank Tea Shop was founded with a love for milk tea and Pokémon!
                    Our mission is to bring refreshing drinks and a cozy vibe to every guest.
                    Whether you're a classic pearl lover or an adventurous flavor seeker,
                    there’s something here for everyone.
                </p>
            </div>
            <div class="about-image">
                <img src="/1758800584.685317-nobg.png" alt="Miltank Pokémon mascot">
            </div>
        </div>
    </section>
    <?= view('components/cta'); ?>
    <section class="testimonials-section">
        <h2>What Our Fans Say</h2>
        <div class="testimonials-grid">
            <?= view('components/cardtestimonial', ['testimonial' => 'Miltank Milk Tea is my favorite! So creamy and delicious!', 'author' => 'Ash K.']) ?>
            <?= view('components/cardtestimonial', ['testimonial' => 'The Berry teas are refreshing and fun, just like Pokémon!', 'author' => 'Misty W.']) ?>
            <?= view('components/cardtestimonial', ['testimonial' => 'Legendary Specials are legendary! Truly magical flavors.', 'author' => 'Brock P.']) ?>
        </div>
    </section>
    <section>
        <h2>Contact Us</h2>
        <p style="text-align:center;">📍 123 Milk Street, Pokétown</p>
        <p style="text-align:center;">📞 (123) 456-7890</p>
        <p style="text-align:center;">✉️ contact@miltankteashop.com</p>
    </section>

    <?= view('components/footer'); ?>
</body>

</html>