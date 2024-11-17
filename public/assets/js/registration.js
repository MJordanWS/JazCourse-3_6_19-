const form = document.getElementById('form');
const indexUrl = form.dataset.indexUrl; // Ambil URL index dari atribut data
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

form.addEventListener('submit', (e) => {
    e.preventDefault(); // Mencegah pengiriman default

    const isValid = validateInputs();

    if (isValid) {
        form.submit(); // Kirim formulir ke Laravel jika valid
    }
});

const setError = (element, message) => {
    const errorDisplay = element.nextElementSibling;

    errorDisplay.innerText = message;
    element.classList.add('border-red-500', 'focus:ring-red-500');
    element.classList.remove('border-yellow-500', 'focus:ring-yellow-500');
};

const setSuccess = (element) => {
    const errorDisplay = element.nextElementSibling;

    errorDisplay.innerText = '';
    element.classList.remove('border-red-500', 'focus:ring-red-500');
    element.classList.add('border-yellow-500', 'focus:ring-yellow-500');
};

const isValidEmail = (email) => {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(String(email).toLowerCase());
};

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    let isValid = true;

    if (usernameValue === '') {
        setError(username, 'Username is required');
        isValid = false;
    } else {
        setSuccess(username);
    }

    if (emailValue === '') {
        setError(email, 'Email is required');
        isValid = false;
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
        isValid = false;
    } else {
        setSuccess(email);
    }

    if (passwordValue === '') {
        setError(password, 'Password is required');
        isValid = false;
    } else if (passwordValue.length < 8) {
        setError(password, 'Password must be at least 8 characters');
        isValid = false;
    } else {
        setSuccess(password);
    }

    if (password2Value === '') {
        setError(password2, 'Please confirm your password');
        isValid = false;
    } else if (password2Value !== passwordValue) {
        setError(password2, "Passwords don't match");
        isValid = false;
    } else {
        setSuccess(password2);
    }

    return isValid;
};
