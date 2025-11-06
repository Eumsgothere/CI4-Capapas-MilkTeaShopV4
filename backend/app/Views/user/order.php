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
                <?php foreach ($orderItems as $index => $item): ?>
                    <?php
                    $price = (float) preg_replace('/[^\d.]/', '', $item['price']);
                    $quantity = $item['quantity'] ?? 1;
                    $subtotal = $price * $quantity;
                    $total += $subtotal;
                    ?>
                    <div class="order-item" style="display:flex; justify-content:space-between; align-items:center; margin-bottom:10px;">
                        <div style="flex:2;"><?= esc($item['title']) ?></div>
                        <div style="flex:1; text-align:center;">
                            <form action="/order/update/<?= $index ?>" method="post" style="display:flex; align-items:center;">
                                <input type="number" name="quantity" value="<?= $quantity ?>" min="1" style="width:50px; margin-right:5px;">
                                <button type="submit" class="btn btn-bordered">Update</button>
                            </form>
                        </div>
                        <div style="flex:1; text-align:center;">₱<?= number_format($subtotal, 2) ?></div>
                        <div style="flex:1; text-align:center;">
                            <form action="/order/remove/<?= $index ?>" method="post">
                                <button type="submit" class="btn btn-bordered">Remove</button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div style="text-align:right; font-weight:bold; margin-top:15px;">
                    Total: ₱<?= number_format($total, 2) ?>
                </div>
            </div>




            <a href="/confirm-order" class="btn-confirm">Confirm Order</a>
        <?php endif; ?>
    </div>
</main>

<?= view('components/footer'); ?>