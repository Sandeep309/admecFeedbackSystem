function validateForm() {
  // Forms Inputs
  const fullName = document.studentForm.fullName.value;
  const studentId = document.studentForm.studentId.value;
  const email = document.studentForm.email.value;
  const phoneNumber = document.studentForm.phoneNumber.value;

  // All Regex Patterns
  const fullNamePattern = /^[a-z]([-']?[a-z]+)*( [a-z]([-']?[a-z]+)*)+$/;
  const studentIdPattern =
    /^[a-zA-Z]{2}\/[a-zA-Z]{2}\/[a-zA-Z]{2,}\/[0-9-]{5}\/[0-9]{2}$/;
  const emailPattern =
    /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)*$/;
  const phoneNumberPattern = /^([0|\+[0-9]{1,5})?([7-9][0-9]{9})$/;

  // Full Name
  if (!fullName.match(fullNamePattern)) {
    document.studentForm.fullName.focus();
    document.studentForm.fullName.classList.add("is-invalid");
    document.studentForm.fullName.classList.remove("is-valid");
    return false;
  } else {
    document.studentForm.fullName.classList.remove("is-invalid");
    document.studentForm.fullName.classList.add("is-valid");
  }

  // Student Id
  if (!studentId.match(studentIdPattern)) {
    document.studentForm.studentId.focus();
    document.studentForm.studentId.classList.add("is-invalid");
    document.studentForm.studentId.classList.remove("is-valid");
    return false;
  } else {
    document.studentForm.studentId.classList.remove("is-invalid");
    document.studentForm.studentId.classList.add("is-valid");
  }

  // Email Address
  if (!email.match(emailPattern)) {
    document.studentForm.email.focus();
    document.studentForm.email.classList.add("is-invalid");
    document.studentForm.email.classList.remove("is-valid");
    return false;
  } else {
    document.studentForm.email.classList.remove("is-invalid");
    document.studentForm.email.classList.add("is-valid");
  }

  // Phone Number
  if (!phoneNumber.match(phoneNumberPattern)) {
    document.studentForm.phoneNumber.focus();
    document.studentForm.phoneNumber.classList.add("is-invalid");
    document.studentForm.phoneNumber.classList.remove("is-valid");
    return false;
  } else {
    document.studentForm.phoneNumber.classList.remove("is-invalid");
    document.studentForm.phoneNumber.classList.add("is-valid");
  }

  return true;
}
function clearForm() {
  // Clear form values
  document.studentForm.fullName.value = "";
  document.studentForm.studentId.value = "";
  document.studentForm.email.value = "";
  document.studentForm.phoneNumber.value = "";

  // Clear touched clases
  document.studentForm.fullName.classList.remove("is-invalid", "is-valid");
  document.studentForm.studentId.classList.remove("is-invalid", "is-valid");
  document.studentForm.email.classList.remove("is-invalid", "is-valid");
  document.studentForm.phoneNumber.classList.remove("is-invalid", "is-valid");
}

// UnSelect All Checkboxes
const unSelectBtn = document.querySelector("#btn-check5");
unSelectBtn.addEventListener("click", function unCheck() {
  const items = document.getElementsByName("courseCheck[]");
  for (var i = 0; i < items.length; i++) {
    if (items[i].type == "checkbox") {
      const labels = items[i].nextElementSibling.classList;
      // console.warn(items[i].checked + " before");
      labels.add("myCheckboxDeactive");
      items[i].checked = false;
      // console.log("then UnSelected");
      // console.log(items[i].checked + " after");
    }
  }
  this.classList.add("myCheckboxActive");
  this.classList.remove("myCheckboxDeactive");
});

// Active Class On Selected Checkboxes
$(document).ready(function () {
  let unSelectBtn = document.querySelector("#btn-check5");

  // add active class if checkbox is checked by default
  $('input[type="checkbox"]:checked').next().addClass("myCheckboxActive");

  // toggle active check class on checkbox inputs
  $('input[type="checkbox"]').change(function () {
    if ($(this).is(":checked")) {
      $(this).next().removeClass("myCheckboxDeactive");
      $(this).next().addClass("myCheckboxActive");
      unSelectBtn.classList.remove("myCheckboxActive");
    } else {
      $(this).next().removeClass("myCheckboxActive");
      $(this).next().addClass("myCheckboxDeactive");
    }
  });
});
