<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rodztechnology Home Page</title>
    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!--Bootstrap Stylesheet-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Main Stylesheet-->
    <link rel="stylesheet" href="css/main.css">
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@0;1&family=Red+Hat+Mono:ital,wght@1,600&display=swap" rel="stylesheet">
</head>
<body>
    <br>
    <div class="logo container-md justify-content-between align-items-center">
        <h1 class="text-decoration-none text-white fs-15 fw-bold">RodzTech</h1>
    </div>
    <br>
    <form method="post" action="login.php">
        <h4>Payroll Software</h4>
            <?php
                if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error'];?></p>
            <?php } ?>
        <div class="mb-4 mt-3">
          <input type="text" class="form-control" id="uname" placeholder="Enter Username" name="username">
        </div>
        <div class="mb-4">
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Sign In</button>
      </form>
    
    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>