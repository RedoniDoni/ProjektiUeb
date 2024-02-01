function showSignup() {
  document.getElementById('loginForm').classList.add('hidden');
  document.getElementById('signupForm').classList.remove('hidden');
}

function showLogin() {
  document.getElementById('loginForm').classList.remove('hidden');
  document.getElementById('signupForm').classList.add('hidden');
}function validateFormLogIn() {
    let isValid = true;

    const email = document.getElementById('email');
    const password = document.getElementById('password');

    const emailValue = emailInput.value.trim();
    const passwordValue = passwordInput.value.trim();

    const emailError = document.getElementById('emailError');
    const passwordError = document.getElementById('passwordError');

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailValue.match(emailRegex)) {
      emailError.textContent = 'Ofroni email te sakte!';
      isValid = false;
    } else {
      emailError.textContent = '';
    }

    if (passwordValue.length < 6) {
      passwordError.textContent = 'Password-i duhet te kete se paku 6 karaktere!';
      isValid = false;
    } else {
      passwordError.textContent = '';
    }

    return isValid;
}
function validateSignupForm() {
    let isValid = true;

    const emriInput = document.getElementById('emriSignUp');
    const mbiemriInput = document.getElementById('mbiemriSignUp');
    const emailInput = document.getElementById('emailiSignUp');
    const passwordInput = document.getElementById('passwordiSignUp');

    const emriValue = emriInput.value.trim();
    const mbiemriValue = mbiemriInput.value.trim();
    const emailValue = emailInput.value.trim();
    const passwordValue = passwordInput.value.trim();

    const emriError = document.getElementById('emriError');
    const mbiemriError = document.getElementById('mbiemriError');
    const emailError = document.getElementById('emailErrorSignUp');
    const passwordError = document.getElementById('passwordErrorSignUp');

    const nameRegex = /^[A-Z][a-z]*$/;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emriValue.match(nameRegex)) {
      emriError.textContent = 'Emri duhet te filloj me shkronje te madhe!';
      isValid = false;
    } else {
      emriError.textContent = '';
    }

    if (!mbiemriValue.match(nameRegex)) {
      mbiemriError.textContent = 'Mbiemri duhet te filloj me shkronje te madhe!';
      isValid = false;
    } else {
      mbiemriError.textContent = '';
    }

    if (!emailValue.match(emailRegex)) {
      emailError.textContent = 'Email-i nuk eshte i sakte!';
      isValid = false;
    } else {
      emailError.textContent = '';
    }

    if (passwordValue.length < 6) {
      passwordError.textContent = 'Password-i duhet te kete se paku 6 karaktere!';
      isValid = false;
    } else {
      passwordError.textContent = '';
    }
    return isValid;
}