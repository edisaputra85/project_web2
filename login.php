<!doctype html>
<html lang="en" class="h-100">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Login Aplikasi</title>
  </head>
  <body class="h-100 bg-secondary d-flex align-items-center">
      <div class="container">
          <div class="row">
              <div class="col-sm-6 col-md-4 mx-auto bg-light p-4">
                  <h3 class="text-center fw-bold pb-3 mb-3 border-bottom">Login Aplikasi</h3>
                  <form method="post" action="ceklogin.php">
                      <input class="form-control mb-3" type="text" placeholder="Username" name="username">
                      <input class="form-control mb-3" type="password" placeholder="Password" name="password">
                      <!-- btn-block is deprecated in bootstrap 5.0, solution: using col-12 in class button-->
                      <input class="btn btn-primary col-12" type="submit" value="Login">
                  </form>
              </div>
         </div>
     </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
