<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login to YOLO Travel</title> 
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login to YOLO Travel</span></div>
        <form action="login/login_validation.php" method="post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="userName" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="userPassword" required>
          </div>
          <div class="row button">
            <input type="submit" value="Login">
          </div>
          <?php
            if(isset($_GET["isLoggedIn"]) && $_GET["isLoggedIn"] < 0 ) {
                echo '<div><span style="color:red;">Invalid user name or password</span></div>';
            }
          ?>
        </form>
      </div>
    </div>
  </body>
</html>