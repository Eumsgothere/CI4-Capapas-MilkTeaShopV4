<?= view('components/head', ['page' => 'order']); ?>
<?= view('components/header'); ?>

<title>Miltank Tea Shop - Order</title>
<main class="menu-page">
    <div class="order-container">
        <h1>Your Order</h1>

        <?php $session = session(); ?>
        <?php $orderItems = $session->get('order') ?? []; ?>

        <?php if (empty($orderItems)): ?>
            <p style="text-align:center;">
                Your order is empty. Go back to the <a href="/menu">menu</a> to add items.
            </p>
        <?php else: ?>
            <div class="order-list">
                <?php $total = 0; ?>
                <?php foreach ($orderItems as $item): ?>
                    <div class="order-item">
                        <span><?= esc($item['title']) ?></span>
                        <span><?= esc($item['price']) ?></span>
                    </div>
                    <?php
                    $price = (float) preg_replace('/[^\d.]/', '', $item['price']);
                    $total += $price;
                    ?>
                <?php endforeach; ?>
                <div class="total">Total: ₱<?= number_format($total, 2) ?></div>
            </div>

            <a href="/confirm-order" class="btn-confirm">Confirm Order</a>
        <?php endif; ?>
    </div>
</main>

<?= view('components/footer'); ?>