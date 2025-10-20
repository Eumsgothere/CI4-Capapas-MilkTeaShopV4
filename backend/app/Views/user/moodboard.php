<!DOCTYPE html>
<html lang="en">

<?= view('components/head', ['page' => 'moodboard']); ?>

<body>
    <?= view('components/header'); ?>

    <div class="page-title">
        <h2>Mood Board</h2>
    </div>

    <section>
        <h2>Color Palette</h2>
        <div class="palette">
            <div class="swatch pink">#f6b6c4<br>Pink</div>
            <div class="swatch cream">#fcebb7<br>Cream</div>
            <div class="swatch blue">#4a90e2<br>Blue</div>
            <div class="swatch dark">#2f2f2f<br>Dark</div>
            <div class="swatch white">#ffffff<br>White</div>
        </div>
    </section>

    <section>
        <h2>Typography</h2>
        <div class="typography">
            <div>
                <h3>Heading Font</h3>
                <p class="heading-font">Aa Bb Cc - Lilita One</p>
            </div>
            <div>
                <h3>Body Font</h3>
                <p class="body-font">Aa Bb Cc - Poppins</p>
            </div>
        </div>
    </section>

    <section>
        <h2>Buttons</h2>
        <div class="buttons" style="display:flex; justify-content:center; gap:1rem; flex-wrap:wrap;">
            <?= view('components/buttons', [
                'btnText' => 'Primary Button',
                'btnLink' => '#',
                'btnType' => 'primary'
            ]) ?>
            <?= view('components/buttons', [
                'btnText' => 'Secondary Button',
                'btnLink' => '#',
                'btnType' => 'secondary'
            ]) ?>
            <?= view('components/buttons', [
                'btnText' => 'Bordered Button',
                'btnLink' => '#',
                'btnType' => 'bordered'
            ]) ?>
            <?= view('components/buttons', [
                'btnText' => 'Disabled Button',
                'btnLink' => '#',
                'btnType' => 'primary',
                'btnDisabled' => true
            ]) ?>
        </div>
    </section>


    <section>
        <h2>Card Sample</h2>
        <div class="card-grid">
            <?= view('components/card', [
                'imgSrc' => 'https://assets.epicurious.com/photos/629f98926e3960ec24778116/1:1/w_2560%2Cc_limit/BubbleTea_RECIPE_052522_34811.jpg',
                'title' => 'Classic Pearl Milk Tea',
                'desc' => 'Rich black tea, creamy milk, and chewy pearls.'
            ]) ?>
        </div>

    </section>

    <section>
        <h2>Logos</h2>
        <div class="logos">
            <div class="logo circle">
                <img src="/1758800584.685317-nobg.png" alt="Miltank Logo">
            </div>
            <div class="logo square">
                <img src="/1758800584.685317-2.jpg" alt="Miltank Logo">
            </div>
        </div>
    </section>

    <?= view('components/footer'); ?>

</body>

</html>