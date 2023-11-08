<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login page</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
   
    <div class="container">
        <div class="box">
            <h1>Login qismi </h1>
        <div class="box mt-5">
            <div class="boxuser mt-6 col-6">
              <form action="index.html" method="POST">
              <label class="floatingInput mt-5"> Username</label>
                <div class="form-floating  ">
                    <input type="text" class="form-control"  placeholder="Username" name="username">
                    <label class="floatingInput ">Username</label>
                  </div>
                  <label class="floatingInput mt-3"> parol kiriting</label>
                <div class="form-floating ">
                    <input type="password" class="form-control" placeholder="number" name="password">
                    <label class="floatingInput ">parol kiriting</label>
                  
                  <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" value="" >
                    <label class="form-check-label" for="flexCheckIndeterminate">
                      shartlarga  rozilik bildiring:
                    </label>
                  </div>
                  <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary btn-lg" name="button_users">Kirish</button>
                  </div>
                  <p>
                    Ro'yxatdan o'tmagan bo'lsangiz:<a href="reg.php">Oldin ro'yxatdan o'ting</a>
                  </p>
              </form>
               <?php
               
               if(isset($_GET["button_users"])){

               $con=mysqli_connect('localhost','root','','dbregstir') or die("xato ulandi");
               $u=$_GET=['username'];
               $e=$_GET=['password'];
               
               $sql="INSERT INTO users(username,password) VALUES('{$u}', '{$e}')";
               $r=mysqli_query($con,$sql);
               if($r){
                   
       
               }
           } 
            ?>
            </div>
        </div>
        </div>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>