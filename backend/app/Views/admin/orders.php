<?= view('components/head', ['page' => 'admin-orders']); ?>
<?= view('components/header'); ?>

<main>
    <h1>Confirmed Orders</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Item</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Status</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($orders)): ?>
                <?php foreach ($orders as $order): ?>
                    <tr>
                        <td><?= $order['id'] ?></td>
                        <td><?= esc($order['first_name'] ?? 'Guest') ?> <?= esc($order['last_name'] ?? '') ?></td>
                        <td><?= esc($order['menu_name'] ?? 'Unknown') ?> </td>
                        <td><?= $order['quantity'] ?? 1 ?></td>
                        <td>₱<?= number_format($order['total_price'], 2) ?></td>
                        <td><?= esc($order['status']) ?></td>
                        <td><?= $order['created_at'] ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No confirmed orders found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</main>

<?= view('components/footer'); ?>