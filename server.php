<?php
session_start();

// o'zgaruvchilarni ishga tushirish
$username = "";
$email    = "";
$errors = array(); 

// ma'lumotlar bazasiga ulanish
$db = mysqli_connect('localhost', 'root', '', 'dbregstir');

// FOYDALANUVCHI RUYXATI
if (isset($_POST['reg_b'])) {
  // formadan barcha kiritilgan qiymatlarni qabul qilish
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  //shaklni tekshirish: shakl to'g'ri to'ldirilganligiga ishonch hosil qiling ...
  // $errors massiviga (array_push()) mos xatoni qo'shish orqali
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // ishonch hosil qilish uchun avval ma'lumotlar bazasini tekshiring
  // bir xil foydalanuvchi nomi va/yoki elektron pochta manziliga ega foydalanuvchi allaqachon mavjud emas
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // agar foydalanuvchi mavjud bo'lsa
    if ($user['username'] === $username) {
      array_push($errors, "Foydalanuvchi nomi allaqachon mavjud");
    }

    if ($user['email'] === $email) {
      array_push($errors, "elektron pochta allaqachon mavjud");
    }
  }

  //  agar formada xatolik bo'lmasa, foydalanuvchini ro'yxatdan o'tkazing
  if (count($errors) == 0) {
  	$password = md5($password_1);//ma'lumotlar bazasiga saqlashdan oldin parolni shifrlash

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	
  	header('location: login.php');
  }
}

// FOYDALANUVCHI KIRISH
if (isset($_POST['button_users'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
 
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Foydalanuvchi nomi talab qilinadi");
  }
  if (empty($password)) {
  	array_push($errors, "Parol talab qilinadi");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	 
  	  header('location: index.html');
  	}else {
  		array_push($errors, "Noto'g'ri foydalanuvchi nomini kiritdingiz");
  	}
  }
}

?>