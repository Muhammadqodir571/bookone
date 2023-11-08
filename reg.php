<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registratsa page</title>
    <link rel="stylesheet" href="registratsa.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <?php include('server.php') ?>
    <div class="container">
        <div class="box">
            <h1> Ro'yxatdan o'tish qismi</h1>
        <div class="box mt-5">
            <div class="boxuser mt-6 col-6">
            <form method="post" action="reg.php">
            <?php include('errors.php'); ?>
                <label class="floatingInput mt-5"> Username</label>
                <div class="form-floating  ">
                    <input type="text" class="form-control"  placeholder="Username" name="username" value="<?php echo $username; ?>">
                    <label class="floatingInput ">Username</label>
                  </div>
                  <label class="floatingInput mt-3"> Email address</label>
                <div class="form-floating ">
                    <input type="email" class="form-control" placeholder="name@example.com" name="email"  value="<?php echo $email; ?>">
                    <label class="floatingInput ">Email address</label>
                  </div>
                  <label class="floatingInput mt-3"> password</label>
                  <div class="form-floating ">
                    <input type="password" class="form-control"  placeholder="Password" name="password_1">
                    <label class="floatingPassword">password1</label>
                  </div>
                  <label class="floatingInput mt-3"> Prolning qayta kiriting</label>
                  <div class="form-floating ">
                    <input type="password" class="form-control" placeholder="Password" name="password_2">
                    <label  class="floatingPassword">Password2</label>
                  </div>
                  <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                      shartlarga  rozilik bildiring:
                    </label>
                  </div>
                  <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary btn-lg" name="reg_b">Ro'yxatdan o'tish</button>
                  </div>
                  <p>
                    Allaqachon azomisiz: <a href="login.php">tizimga kitish</a>
                  </p>
               </form>
            </div>
        </div>
        </div>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>