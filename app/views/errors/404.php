<?php home_view_layout(['header']); ?>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="text-center">
        <h1 class="display-1 fw-bold text-danger">404</h1>
        <p class="fs-4 text-muted">Oops! The page you are looking for does not exist.</p>
        <a href="<?= baseurl(); ?>" class="btn btn-outline-primary btn-lg mt-3">Back to Home</a>
    </div>
</div>