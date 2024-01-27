const password = document.querySelector(".field input[type='password']");
toogleButton = document.querySelector(".form .field i");

toogleButton.onclick = () => {
  if (password.type === "password") {
    password.type = "text";
    toogleButton.classList.add("active");
  } else {
    password.type = "password";
    toogleButton.classList.remove("active");
  }
};
