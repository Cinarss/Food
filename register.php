<?php include "admin/connect.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<form action="admin/admin.php" method="POST">


  <div class="form">

      <div class="title">Welcome</div>

      <div class="subtitle">Let's create your account!</div>
      <div class="input-container ic1">
        <input id="firstname" class="input" name="username" require="" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="username" class="placeholder">Username</label>
      </div>

      <div class="input-container ic2">
        <input id="lastname" class="input" name="email" require="" type="email" placeholder=" " />
        <div class="cut"></div>
        <label for="email" class="placeholder">Email</label>
      </div>


      <div class="input-container ic2">
        <input id="email" class="input" name="password" require="" type="password" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="password" class="placeholder">Password</label>
      </div>


     <button type="submit" name="register" class="submit">submit</button>
      <p class="goLoginPage">Do you have a account?<a href="login.php"> <strong>Login</strong></a></p>
    </div>
  </form>

</body>
</html>