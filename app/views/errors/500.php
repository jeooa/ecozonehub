<?php home_view_layout(['header']); ?>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="text-center">
        <h1 class="display-1 text-danger">500</h1>
        <p class="fs-5 text-muted">
            Oops! Something went wrong on the server.
        </p>
        <a href="<?= baseurl(); ?>" class="btn btn-dark mt-3">Back to Home</a>
    </div>
</div>