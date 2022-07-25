function displayPassword() {
  var password = document.getElementById("password");
  var displayPass = document.getElementById("display-pass");
  var hidenPass = document.getElementById("hiden-pass");

  if (password.type === "password") {
    password.type = "text";
    displayPass.style.display = "block";
    hidenPass.style.display = "none";
  } else {
    password.type = "password";
    displayPass.style.display = "none";
    hidenPass.style.display = "block";
  }
}

function displayPasswordConfirm() {
  var passConfirm = document.getElementById("passwordConfirm");
  var displayPassConfirm = document.getElementById("display-passConfirm");
  var hidenPassConfirm = document.getElementById("hiden-passConfirm");

  if (passConfirm.type === "password") {
    console.log("click if");
    passConfirm.type = "text";
    displayPassConfirm.style.display = "block";
    hidenPassConfirm.style.display = "none";
  } else {
    console.log("click else");
    passConfirm.type = "password";
    displayPassConfirm.style.display = "none";
    hidenPassConfirm.style.display = "block";
  }
}
