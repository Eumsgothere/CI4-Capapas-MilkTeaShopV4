<!DOCTYPE html>
<html lang="en">

<?= view('components/head', ['page' => 'signup']); ?>

<body>
    <?= view('components/header'); ?>

    <div class="container">
        <div class="card">
            <h2>Sign Up</h2>

            <?php if (session()->getFlashdata('errors')): ?>
                <div class="errors">
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <p><?= esc($error) ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>

            <form action="/signup" method="post">
                <label>Username</label>
                <input type="text" name="username" required>

                <label>First Name</label>
                <input type="text" name="first_name" required>

                <label>Middle Name</label>
                <input type="text" name="middle_name">

                <label>Last Name</label>
                <input type="text" name="last_name" required>

                <label>Email</label>
                <input type="email" name="email" required>

                <label>Password</label>
                <input type="password" name="password" required>

                <label>Confirm Password</label>
                <input type="password" name="confirm_password" required>

                <button type="submit">Sign Up</button>
            </form>


            <div class="extra">
                <p>Already have an account? <a href="/login">Login</a></p>
            </div>
        </div>
    </div>

    <?= view('components/footer'); ?>
</body>

</html>