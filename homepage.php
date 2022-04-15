<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rodztechnology</title>
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
    <!--Header Start-->
    <header class="header p-3 position-absolute start-0 top-0 end-0" style="background-color: black;">
        <div class="d-flex justify-content-between align-items-center">
            <a href="/" class="text-decoration-none text-white fs-2 fw-bold">RodzTechnology Payroll System</a>
        </div>
        <div class="navbar justify-content-end">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Salesrep</a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="#">Salesrep Profile</a></li>
                            <li><a class="nav-link" href="#">Add Salesrep Profile</a></li>
                         </ul>
                </li>
                <ul class="nav-item">
                    <li><a class="nav-link" href="#">Create Payroll</a></li>
                </ul>
                <ul class="nav-item">
                    <li><a class="nav-link" href="#">PDF's</a></li>
                </ul>
                <ul class="nav-item">
                    <li><a class="nav-link" href="login.php">Logout</a></li>
                </ul>
            </ul>
        </div>

    </header>
    <!--Header End-->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <h3 class="text-center">Welcome back, <?php echo $_SESSION['username']?></h3>

    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<?php
}else{
  header("Location: /index.php");
  exit();  
}
?>