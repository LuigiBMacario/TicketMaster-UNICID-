window.addEventListener("load", function() {
    const loadingScreen = document.getElementById("loading-screen");
    loadingScreen.style.display = "none";
});

document.addEventListener('DOMContentLoaded', function() {
    const inputs = document.querySelectorAll('.input');
    const button = document.querySelector('.signup-button');

    const formContainer = document.querySelector('.form-container');
    formContainer.classList.add('show');

    if (inputs.length > 0) {
    inputs.forEach((input) => input.addEventListener('focus', handleFocus));
    inputs.forEach((input) => input.addEventListener('focusout', handleFocusOut));
    inputs.forEach((input) => input.addEventListener('input', handleChange));
    }

    function handleFocus({ target }) {
        const span = target.previousElementSibling;
        span.classList.add('span-active');
    }

    function handleFocusOut({ target }) {
        if (target.value === '') {
            const span = target.previousElementSibling;
            span.classList.remove('span-active');
        }
    }

    function handleChange() {
        const [username, password] = inputs;
        const isPasswordValid = password.value.length >= 6;
        const isUsernameValid = username.value.length >= 3;
        if (isPasswordValid && isUsernameValid) {
            button.removeAttribute('disabled');
        } else {
            button.setAttribute('disabled', '');
        }
    }
});