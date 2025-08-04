<?php home_view_layout(['header']); ?>
<style>
    body {
        min-height: 100vh;
        background: #fafafa;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        position: relative;
        overflow: hidden;
    }

    body::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 45vh;
        background: #fafafa url('<?= asset('dist/assets/img/collage.jpg'); ?>') center/cover no-repeat;
        -webkit-mask-image: linear-gradient(black, transparent);
        mask-image: linear-gradient(black, transparent);
        z-index: 1;
    }

    .login-container {
        background: white;
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        width: 100%;
        max-width: 450px;
        display: flex;
        min-height: 600px;
        position: relative;
        z-index: 2;
    }

    .login-section {
        flex: 1;
        padding: 60px 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: white;
    }

    .login-header {
        text-align: center;
        margin-bottom: 30px;
        color: #2d5a2d;
    }

    .login-header h1 {
        font-size: 28px;
        font-weight: 600;
        margin: 0 0 8px 0;
        color: #2d5a2d;
        text-transform: uppercase;
    }

    .login-msg {
        font-size: 18px;
        font-weight: 500;
        color: #495057;
        margin-bottom: 40px;
        min-height: 24px;
        text-align: center;
    }

    .typewriter {
        white-space: nowrap;
        overflow: hidden;
        animation: blink-caret 1s infinite;
    }

    @keyframes blink-caret {

        from,
        to {
            border-color: transparent;
        }

        50% {
            border-color: #495057;
        }
    }

    .logo-container {
        text-align: center;
        margin-bottom: 35px;
    }

    .logo-image {
        max-width: 100px;
        height: auto;
        border-radius: 50%;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .logo-image:hover {
        transform: scale(1.05);
    }

    .form-group {
        margin-bottom: 25px;
        position: relative;
    }

    .form-control {
        width: 100%;
        padding: 16px 20px 16px 50px;
        border: 2px solid #e9ecef;
        border-radius: 12px;
        font-size: 16px;
        transition: all 0.3s ease;
        background: #f8f9fa;
        color: #495057;
    }

    .form-control:focus {
        outline: none;
        border-color: #51cf66;
        background: white;
        box-shadow: 0 0 0 3px rgba(81, 207, 102, 0.1);
    }

    .form-control::placeholder {
        color: #6c757d;
        font-weight: 400;
    }

    .input-icon {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #6c757d;
        font-size: 18px;
        transition: color 0.3s ease;
    }

    .form-group:focus-within .input-icon {
        color: #51cf66;
    }

    .login-btn {
        width: 100%;
        padding: 16px;
        background: linear-gradient(135deg, #51cf66 0%, #40c057 100%);
        border: none;
        border-radius: 12px;
        color: white;
        font-size: 16px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 15px;
        position: relative;
        overflow: hidden;
    }

    .login-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(81, 207, 102, 0.3);
    }

    .login-btn:active {
        transform: translateY(0);
    }

    .form-footer {
        margin-top: 35px;
        text-align: center;
    }

    .form-footer a {
        color: #6c757d;
        text-decoration: none;
        font-size: 14px;
        transition: color 0.3s ease;
        font-weight: 500;
    }

    .form-footer a:hover {
        color: #51cf66;
    }

    .forgot-link {
        margin-bottom: 15px;
        display: block;
    }

    .register-link {
        font-weight: 500;
    }

    .alert {
        padding: 16px;
        border-radius: 12px;
        margin-top: 20px;
        border: none;
        font-weight: 500;
    }

    .alert-danger {
        background: #f8d7da;
        color: #721c24;
        border-left: 4px solid #dc3545;
    }

    @media (max-width: 768px) {
        .login-container {
            max-width: 400px;
        }

        .login-section {
            padding: 40px 30px;
        }
    }
</style>
<div class="login-container mt-5">
    <div class="login-section">
        <div class="logo-container">
            <img src="<?= asset('dist/assets/img/eco-zone-logo.jpg'); ?>" alt="Eco-Zone Logo" class="logo-image">
        </div>
        <div class="login-header">
            <h1>Member Login</h1>
        </div>
        <p class="login-msg text-center" id="typewriter-text"></p>

        <form action="<?= baseurl(); ?>/administrator/login/authenticate" method="post">
            <input type="hidden" name="csrf_token"
                value="<?= isset($_SESSION['csrf_token']) ? htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8') : ''; ?>">

            <div class="form-group">
                <i class="bi bi-envelope input-icon"></i>
                <input type="text" name="username" class="form-control" placeholder="Username" required />
            </div>

            <div class="form-group">
                <i class="bi bi-lock-fill input-icon"></i>
                <input type="password" name="password" class="form-control" placeholder="Password" required />
            </div>

            <button type="submit" class="login-btn">Login</button>
        </form>

        <?php if ($error = get_flash('error')): ?>
            <div class="alert alert-danger">
                <?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?>
            </div>
        <?php endif; ?>

    </div>
</div>
<script>
    // Typewriter effect for login message
    function typeWriter() {
        const text = "Sign in to start your session";
        const element = document.getElementById('typewriter-text');
        let i = 0;

        function type() {
            if (i < text.length) {
                element.innerHTML = text.substring(0, i + 1);
                element.classList.add('typewriter');
                i++;
                setTimeout(type, 50);
            } else {
                // After typing is complete, wait then restart
                setTimeout(() => {
                    element.classList.remove('typewriter');
                    setTimeout(() => {
                        i = 0;
                        element.innerHTML = '';
                        type();
                    }, 250);
                }, 2000);
            }
        }

        type();
    }

    // Start typewriter effect when page loads
    document.addEventListener('DOMContentLoaded', typeWriter);
</script>