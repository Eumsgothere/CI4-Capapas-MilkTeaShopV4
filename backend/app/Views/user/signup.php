<!DOCTYPE html>
<html lang="en">

<?= view('components/head', ['page' => 'signup']); ?>

<body>
    <?= view('components/header'); ?>

    <div class="container">
        <div class="card">
            <h2>Sign Up</h2>

            <?php
            $errors = $errors ?? [];
            $old = $old ?? [];
            ?>

            <?php if (!empty($errors)): ?>
                <div class="errors">
                    <?php foreach ($errors as $error): ?>
                        <p><?= esc($error) ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <form class="space-y-6 mt-8" action="/signup" method="post" novalidate>
                <label>Username</label>
                <input
                    type="text"
                    name="username"
                    required
                    value="<?= esc($old['username'] ?? '') ?>"
                    aria-invalid="<?= isset($errors['username']) ? 'true' : 'false' ?>"
                    aria-describedby="username-error">
                <?php if (!empty($errors['username'])): ?>
                    <p id="username-error" class="text-red-600 text-sm"><?= esc($errors['username']) ?></p>
                <?php endif; ?>

                <label>First Name</label>
                <input
                    type="text"
                    name="first_name"
                    required
                    value="<?= esc($old['first_name'] ?? '') ?>"
                    aria-invalid="<?= isset($errors['first_name']) ? 'true' : 'false' ?>"
                    aria-describedby="first_name-error">
                <?php if (!empty($errors['first_name'])): ?>
                    <p id="first_name-error" class="text-red-600 text-sm"><?= esc($errors['first_name']) ?></p>
                <?php endif; ?>

                <label>Middle Name</label>
                <input
                    type="text"
                    name="middle_name"
                    value="<?= esc($old['middle_name'] ?? '') ?>">

                <label>Last Name</label>
                <input
                    type="text"
                    name="last_name"
                    required
                    value="<?= esc($old['last_name'] ?? '') ?>"
                    aria-invalid="<?= isset($errors['last_name']) ? 'true' : 'false' ?>"
                    aria-describedby="last_name-error">
                <?php if (!empty($errors['last_name'])): ?>
                    <p id="last_name-error" class="text-red-600 text-sm"><?= esc($errors['last_name']) ?></p>
                <?php endif; ?>

                <label>Email</label>
                <input
                    type="email"
                    name="email"
                    required
                    value="<?= esc($old['email'] ?? '') ?>"
                    aria-invalid="<?= isset($errors['email']) ? 'true' : 'false' ?>"
                    aria-describedby="email-error">
                <?php if (!empty($errors['email'])): ?>
                    <p id="email-error" class="text-red-600 text-sm"><?= esc($errors['email']) ?></p>
                <?php endif; ?>

                <label>Password</label>
                <input
                    type="password"
                    name="password"
                    required
                    aria-invalid="<?= isset($errors['password']) ? 'true' : 'false' ?>"
                    aria-describedby="password-error">
                <?php if (!empty($errors['password'])): ?>
                    <p id="password-error" class="text-red-600 text-sm"><?= esc($errors['password']) ?></p>
                <?php endif; ?>

                <label>Confirm Password</label>
                <input
                    type="password"
                    name="confirm_password"
                    required
                    aria-invalid="<?= isset($errors['confirm_password']) ? 'true' : 'false' ?>"
                    aria-describedby="confirm_password-error">
                <?php if (!empty($errors['confirm_password'])): ?>
                    <p id="confirm_password-error" class="text-red-600 text-sm"><?= esc($errors['confirm_password']) ?></p>
                <?php endif; ?>

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