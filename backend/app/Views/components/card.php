<div class="card">
    <?php if (!empty($imgSrc)): ?>
        <img src="<?= esc($imgSrc) ?>" alt="<?= isset($title) ? esc($title) : 'Card image' ?>">
    <?php endif; ?>

    <div class="card-content">
        <?php if (!empty($title)): ?>
            <h3><?= esc($title) ?></h3>
        <?php endif; ?>

        <?php if (!empty($desc)): ?>
            <p><?= esc($desc) ?></p>
        <?php endif; ?>

        <?php if (!empty($statusButton)): ?>
            <?= $statusButton ?>
        <?php endif; ?>
    </div>
</div>