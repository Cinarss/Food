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
        <input id="firstname" class="input" type="email" name="email" require="" placeholder=" " />
        <div class="cut"></div>
        <label for="email" class="placeholder">E-mail</label>
      </div>
      <div class="input-container ic2">
        <input id="lastname" class="input" type="password" name="password" require="" placeholder=" " />
        <div class="cut"></div>
        <label for="password" class="placeholder">Password</label>
      </div>
      
      <button type="submit" name="login" class="submit">submit</button>
      <a href="register.php"><p class="goLoginPage">Sign up For <strong>Food</strong></p></a>
    </div>

</form>
</body>
</html>