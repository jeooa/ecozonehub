<?php home_view_layout(['header']); ?>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="text-center">
        <h1 class="display-1 text-warning">403</h1>
        <p class="fs-5 text-muted">
            Access denied. You do not have permission to view this page.
        </p>
        <a href="<?= baseurl(); ?>" class="btn btn-warning mt-3">Back to Home</a>
    </div>
</div>