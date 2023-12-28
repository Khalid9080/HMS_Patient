function validateForm(event) {
  event.preventDefault();

  const uname = document.getElementById("uname");
  const email = document.getElementById("email");
  const gender = document.querySelector('input[name="gender"]:checked');
  const age = document.getElementById("age");
  const dob = document.getElementById("dob");
  const bg = document.getElementById("bg");
  const pass = document.getElementById("pass");
  const add = document.getElementById("add");

  const errorUname = document.getElementById("error-uname");
  const errorEmail = document.getElementById("error-email");
  const errorGender = document.getElementById("error-gender");
  const errorAge = document.getElementById("error-age");
  const errorDob = document.getElementById("error-dob");
  const errorBg = document.getElementById("error-bg");
  const errorPass = document.getElementById("error-pass");
  const errorAdd = document.getElementById("error-add");

  let isValid = true;

  const validateRequired = (field, errorField) => {
    if (field.value.trim() === "") {
      errorField.textContent = "This field is required";
      isValid = false;
    } else {
      errorField.textContent = "";
    }
  };

  const validateEmail = (emailField, errorField) => {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(emailField.value)) {
      errorField.textContent = "Invalid email format";
      isValid = false;
    } else {
      errorField.textContent = "";
    }
  };

  const validatePassword = (passField, passErrorField) => {
    if (passField.value.length < 8) {
      passErrorField.textContent = "Password must be at least 8 characters";
      isValid = false;
    } else {
      passErrorField.textContent = "";
    }
  };

  // Perform validations for all fields
  validateRequired(uname, errorUname);
  validateRequired(email, errorEmail);
  validateEmail(email, errorEmail);
  if (!gender) {
    errorGender.textContent = "Please select a gender";
    isValid = false;
  } else {
    errorGender.textContent = "";
  }
  validateRequired(age, errorAge);
  validateRequired(dob, errorDob);
  validateRequired(bg, errorBg);
  validatePassword(pass, errorPass);
  validateRequired(add, errorAdd);

  // If everything is valid, submit the form
  if (isValid) {
    event.target.submit();
  }
}
