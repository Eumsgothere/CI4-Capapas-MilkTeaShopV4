<div class="menu-item">
    <img src="<?= $imgSrc ?>" alt="<?= $imgAlt ?>">
    <h3><?= $title ?></h3>
    <p><?= $desc ?></p>
    <div class="price"><?= $price ?></div>

    <!-- Add the button here -->
    <?= view('components/button', [
        'btnText' => 'Order Now',
        'btnLink' => '/order?item=' . urlencode($title),
        'btnType' => 'primary'
    ]) ?>
</div>