<?= view('components/head', ['page' => 'dashboard']); ?>
<?= view('components/header'); ?>

<main class="dashboard-page">

    <section class="dashboard-header">
        <h1>Admin Dashboard</h1>
        <p>Quick overview of your shop statistics and activity</p>
    </section>

    <div class="dashboard-cards">
        <div class="card">
            <h2>Total Users</h2>
            <p><?= isset($totalUsers) ? $totalUsers : 0 ?></p>
        </div>
        <div class="card">
            <h2>Total Orders</h2>
            <p><?= isset($totalOrders) ? $totalOrders : 0 ?></p>
        </div>
        <div class="card">
            <h2>Total Menu Items</h2>
            <p><?= isset($totalMenuItems) ? $totalMenuItems : 0 ?></p>
        </div>
    </div>
</main>

<?= view('components/footer'); ?>