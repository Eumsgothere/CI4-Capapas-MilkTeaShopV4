<?= view('components/head', ['page' => 'admin-accounts']); ?>
<?= view('components/header'); ?>

<main>
    <h1>Accounts</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($users)): ?>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= esc($user['id']) ?></td>
                        <td><?= esc($user['username']) ?></td>
                        <td><?= esc($user['first_name']) ?></td>
                        <td><?= esc($user['middle_name']) ?></td>
                        <td><?= esc($user['last_name']) ?></td>
                        <td><?= esc($user['email']) ?></td>
                        <td><?= esc($user['created_at']) ?></td>

                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No users found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</main>

<?= view('components/footer'); ?>