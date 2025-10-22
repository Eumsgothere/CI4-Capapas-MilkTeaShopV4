<!DOCTYPE html>
<html lang="en">

<?= view('components/head', ['page' => 'signup']); ?>

<body>

    <?= view('components/header'); ?>

    <div class="container">
        <div class="card">
            <h2>Sign Up</h2>
            <form action="/" method="post">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" required>

                <label for="middle_name">Middle Name</label>
                <input type="text" id="middle_name" name="middle_name">

                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" required>

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