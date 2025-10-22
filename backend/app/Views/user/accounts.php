<h1>Accounts Page</h1>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= esc($user['id']) ?></td>
                <td><?= esc($user['username']) ?></td>
                <td><?= esc($user['firstname']) ?></td>
                <td><?= esc($user['middlename']) ?></td>
                <td><?= esc($user['lastname']) ?></td>
                <td><?= esc($user['email']) ?></td>
                <td><?= esc($user['created_at']) ?></td>
                <td><?= esc($user['updated_at']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>