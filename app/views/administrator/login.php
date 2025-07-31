<?php home_view_layout(['header']); ?>

<div class="container mt-5">
    <h2>Administrator Login</h2>

    <?php if (!empty($_SESSION['error'])): ?>
        <div class="alert alert-danger"><?= $_SESSION['error'];
        unset($_SESSION['error']); ?></div>
    <?php endif; ?>

    <form method="post" action="<?= baseurl(); ?>/administrator/login/authenticate">
        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>