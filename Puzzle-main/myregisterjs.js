const form = document.getElementById('register-form');
const name = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const confirmPassword = document.getElementById('confirm-password');
const registerBtn = document.getElementById('register-btn');

form.addEventListener('submit', function(event) {
	event.preventDefault();

	if (password.value !== confirmPassword.value) {
		alert('Passwords do not match!');
		return;
	}
});
