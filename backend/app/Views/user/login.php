<!DOCTYPE html>
<html lang="en">

<?= view('components/head', ['page' => 'login']); ?>

<body>
    <?= view('components/header'); ?>

    <div class="container">
        <div class="card">
            <h2>Login</h2>

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

            <form class="space-y-6 mt-8" action="/login" method="post" novalidate>
                <label for="email">Email</label>
                <input
                    id="email"
                    name="email"
                    type="email"
                    autocomplete="email"
                    required
                    value="<?= esc($old['email'] ?? '') ?>"
                    aria-invalid="<?= isset($errors['email']) ? 'true' : 'false' ?>"
                    aria-describedby="email-error">
                <?php if (!empty($errors['email'])): ?>
                    <p id="email-error" class="mt-2 text-red-600 text-sm"><?= esc($errors['email']) ?></p>
                <?php endif; ?>

                <label for="password">Password</label>
                <input
                    id="password"
                    name="password"
                    type="password"
                    required
                    aria-invalid="<?= isset($errors['password']) ? 'true' : 'false' ?>"
                    aria-describedby="password-error">
                <?php if (!empty($errors['password'])): ?>
                    <p id="password-error" class="mt-2 text-red-600 text-sm"><?= esc($errors['password']) ?></p>
                <?php endif; ?>

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