const form = document.getElementById('login-form');
const username = document.getElementById('username');
const password = document.getElementById('password');
const loginBtn = document.getElementById('login-btn');

form.addEventListener('submit', function(event) {
	event.preventDefault();
	if (username.value === 'admin@gmail.com' && password.value === 'admin123') {
		window.location.href = "story.html"
	} else {
		alert('Invalid username or password!');
	}
});
