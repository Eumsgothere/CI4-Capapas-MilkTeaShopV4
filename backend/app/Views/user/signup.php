<!DOCTYPE html>
<html lang="en">

<?= view('components/head', ['page' => 'signup']); ?>

<body>

    <?= view('components/header'); ?>


    <div class="container">
        <div class="card">
            <h2>Sign Up</h2>
            <form action="/" method="post">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm">Confirm Password</label>
                <input type="password" id="confirm" name="confirm" required>

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