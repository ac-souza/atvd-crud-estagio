document.getElementById('togglePassword').addEventListener('mousedown', function(event) {
            // ISSO É CRUCIAL: Impede que o cursor "|" saia do input de senha
            event.preventDefault();
            event.stopPropagation();

            const passwordInput = document.getElementById('tnb-login-dropdown-password');
            const icon = this.querySelector('i');

            if (passwordInput && icon) {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    icon.textContent = 'visibility';
                } else {
                    passwordInput.type = 'password';
                    icon.textContent = 'visibility_off';
                }
            }
        });

        const dropdownMenu = document.querySelector('.dropdown-menu');

        dropdownMenu.addEventListener('click', function(event) {
            event.stopPropagation();
        });