// Register Form
function validateRegisterForm() {
  const name = document.registerForm.name.value;
  const email = document.registerForm.email.value;
  const password = document.registerForm.password.value;

  // All Regex Patterns
  const fullNamePattern = /^[a-z]([-']?[a-z]+)*( [a-z]([-']?[a-z]+)*)+$/;
  const emailPattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)*$/;
  const passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/; /* Minimum eight characters, at least one letter and one number: */

  //   Full Name
  if (!name.match(fullNamePattern)) {
    document.registerForm.name.focus();
    document.registerForm.name.classList.add("is-invalid");
    document.registerForm.name.classList.remove("is-valid");
    return false;
  } else {
    document.registerForm.name.classList.remove("is-invalid");
    document.registerForm.name.classList.add("is-valid");
  }

  //   Email
  if (!email.match(emailPattern)) {
    document.registerForm.email.focus();
    document.registerForm.email.classList.add("is-invalid");
    document.registerForm.email.classList.remove("is-valid");
    return false;
  } else {
    document.registerForm.email.classList.remove("is-invalid");
    document.registerForm.email.classList.add("is-valid");
  }

  //   Password
  if (!password.match(passwordPattern)) {
    document.registerForm.password.focus();
    document.registerForm.password.classList.add("is-invalid");
    document.registerForm.password.classList.remove("is-valid");
    return false;
  } else {
    document.registerForm.password.classList.remove("is-invalid");
    document.registerForm.password.classList.add("is-valid");
  }
  return true;
}

// Login Form
function validateLoginForm() {
  const email = document.loginForm.email.value;
  const password = document.loginForm.password.value;

  // All Regex Patterns
  const emailPattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)*$/;
  const passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/; /* Minimum eight characters, at least one letter and one number: */

  //   Email
  if (!email.match(emailPattern)) {
    document.loginForm.email.focus();
    document.loginForm.email.classList.add("is-invalid");
    document.loginForm.email.classList.remove("is-valid");
    return false;
  } else {
    document.loginForm.email.classList.remove("is-invalid");
    document.loginForm.email.classList.add("is-valid");
  }

  //   Password
  if (!password.match(passwordPattern)) {
    document.loginForm.password.focus();
    document.loginForm.password.classList.add("is-invalid");
    document.loginForm.password.classList.remove("is-valid");
    return false;
  } else {
    document.loginForm.password.classList.remove("is-invalid");
    document.loginForm.password.classList.add("is-valid");
  }
  return true;
}

// Show and Hide
const showBtn = document.querySelector("#showPassword");
const passwordInput = document.querySelector("#password");
showBtn.addEventListener(
  "click",
  (showPassword = () => {
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
    } else {
      passwordInput.type = "password";
    }
  })
);
