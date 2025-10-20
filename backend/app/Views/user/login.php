<!DOCTYPE html>
<html lang="en">

<?= view('components/head', ['page' => 'login']); ?>

<body>
    <?= view('components/header'); ?>

    <div class="container">
        <div class="card">
            <h2>Login</h2>
            <form action="/" method="post">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Login</button>
            </form>
            <div class="extra">
                <p>Don’t have an account? <a href="/signup">Sign Up</a></p>
            </div>
        </div>
    </div>

    <?= view('components/footer'); ?>

</body>

</html>