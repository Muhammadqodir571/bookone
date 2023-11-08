<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Ro'yxatga olish tizimi </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Roʻyxatdan oʻtish</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Foydalanuvchi nomi</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Parol</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Parolni tasdiqlang</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Roʻyxatdan oʻtish</button>
  	</div>
  	<p>
	  Allaqachon a'zomisiz? <a href="login.php">tizimga kirish</a>
  	</p>
  </form>
</body>
</html>