const form = document.querySelector('form');
const passwordInput = document.querySelector('#password');

form.addEventListener('submit', (event) => {
    event.preventDefault();
    const passwordLength = document.querySelector('#password_length').value;
    passwordInput.value = generatePassword(passwordLength);
});

function generatePassword(length) {
    const allowedChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+~`|}{[]\:;?><,./-=';
    let password = '';
    for (let i = 0; i < length; i++) {
      const randomIndex = Math.floor(Math.random() * allowedChars.length);
      password += allowedChars[randomIndex];
    }
    return password;
}