
let toggleButton = document.getElementById('toggleButton');
let navLinks = document.getElementById('navLinks');

toggleButton.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});




// // Get form elements
// const form = document.getElementById('registrationForm');
// const username = document.getElementById('username');
// const email = document.getElementById('email');
// const password = document.getElementById('password');
// const confirmPassword = document.getElementById('confirmpassword');

// // Form submit event listener
// form.addEventListener('submit', validateForm); 

// // Validation function
// function validateForm(event) {

//   // Reset errors
//   usernameError.innerText = '';
//   emailError.innerText = '';
//   passwordError.innerText = '';
//   confirmPasswordError.innerText = '';

//   // Validate username
//   if(username.value.trim() === '') {
//     usernameError.innerText = 'Username is required';
//     event.preventDefault();
//   }

//   // Validate email
//   if(email.value.trim() === '') {
//     emailError.innerText = 'Email is required';
//     event.preventDefault();
//   } else if(!isValidEmail(email.value)) {
//     emailError.innerText = 'Email is invalid';
//     event.preventDefault();
//   }

//   // Validate password
//   if(password.value.trim() === '') {
//     passwordError.innerText = 'Password is required';
//     event.preventDefault();
//   } else if(password.value.length < 6) {
//     passwordError.innerText = 'Password must be at least 6 characters';
//     event.preventDefault();
//   }

//   // Validate confirm password
//   if(confirmPassword.value.trim() === '') {
//     confirmPasswordError.innerText = 'Please confirm your password';
//     event.preventDefault();
//   } else if(confirmPassword.value !== password.value) {
//     confirmPasswordError.innerText = 'Passwords do not match';
//     event.preventDefault();
//   }

// }

// // Email validation function
// function isValidEmail(email) {
//   const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//   return re.test(String(email).toLowerCase());
// }