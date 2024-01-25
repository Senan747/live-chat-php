const password = document.querySelector(".field input[type='password']");
console.log(password);
toogleButton = document.querySelector(".form .field i");
console.log(toogleButton);

console.log(password.type);

toogleButton.onclick = () => {
  if (password.type === "password") {
    password.type = "text";
    toogleButton.classList.add("active");
  } else {
    password.type = "password";
    toogleButton.classList.remove("active");
  }
};
