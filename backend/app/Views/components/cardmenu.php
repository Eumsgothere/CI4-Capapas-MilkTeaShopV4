<div class="menu-item">
    <img src="<?= $imgSrc ?>" alt="<?= $imgAlt ?>">
    <h3><?= $title ?></h3>
    <p><?= $desc ?></p>
    <div class="price"><?= $price ?></div>

    <form action="/order/add" method="post" style="margin-top: 10px;">
        <input type="hidden" name="title" value="<?= $title ?>">
        <input type="hidden" name="price" value="<?= $price ?>">
        <?= view('components/button', [
            'btnText' => 'Order Now',
            'btnType' => 'primary',
            'btnSubmit' => true
        ]) ?>

    </form>
</div>