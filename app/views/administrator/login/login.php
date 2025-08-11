<?php home_view_layout(['header']); ?>

<link rel="stylesheet" href="<?= asset('dist/loginUI/styles.css') ?>" />

<body>
    <div class="login-container ">
        <div class="login-section">
            <div class="logo-container">
                <img src="<?= baseurl(); ?>/dist/assets/img/eco-zone-logo.jpg" alt="Eco-Zone Logo"
                    class="logo-image opacity-75">
            </div>
            <div class="login-header">
                <h1>administrator</h1>
            </div>
            <p class="login-msg text-center" id="typewriter-text"></p>

            <form action="<?= baseurl(); ?>/administrator/login/authenticate" method="post">
                <input type="hidden" name="csrf_token"
                    value="<?= isset($_SESSION['csrf_token']) ? htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8') : ''; ?>">

                <div class="form-group">
                    <i class="bi bi-person input-icon"></i>
                    <input type="text" name="username" class="form-control" placeholder="Username" required />
                </div>

                <div class="form-group">
                    <i class="bi bi-lock-fill input-icon"></i>
                    <input type="password" name="password" class="form-control" placeholder="Password" required />
                </div>

                <button type="submit" class="login-btn">Login</button>
            </form>

            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger">
                    <?= htmlspecialchars($_SESSION['error'], ENT_QUOTES, 'UTF-8');
                    unset($_SESSION['error']); ?>
                </div>
            <?php endif; ?>
        </div>
</body>
<script src="<?= baseurl() ?>/dist/loginUI/script.js"></script>