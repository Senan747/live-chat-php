const form = document.querySelector(".signup form");
const continueBtn = form.querySelector(".button input");

form.onsubmit = () => {
  e.preventDefault();
};

continueBtn.onclick = () => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/signup.php", true);
  xhr.onload = () => {
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
        let data = xhr.response;
        console.log(data)
      }
    }
  };
  xhr.send();
};
