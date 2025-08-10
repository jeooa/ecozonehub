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