<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="wrapper">
      <section class="form signup">
        <header>Gossip Chat</header>
        <form action="#">
          <div class="error-txt">This is an error message!</div>
          <div class="name-details">
            <div class="field input">
              <label for="">Email Address</label>
              <input type="mail" placeholder="Enter your email" />
            </div>
            <div class="field input">
              <label for="">Password</label>
              <input type="password" placeholder="Enter new password" />
              <i class="fas fa-eye"></i>
            </div>

            <div class="field button">
              <input type="submit" value="Continue to Chat" />
            </div>
          </div>
        </form>
        <div class="link">
          Not yet signed up? <a href="index.html">Sign up now</a>
        </div>
      </section>
    </div>
    <script src="javascript/password.js"></script>
  </body>
</html>