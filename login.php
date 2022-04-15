<?php
session_start();
include "db_connect.php";

if (isset($_POST['username']) && isset($_POST['password'])){
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if(empty($uname)){
        header("Location: index.php?error=Username is required.");
        exit();
    }elseif (empty($pass)) {
        header("Location: index.php?error=Password is required.");
        exit();
    }else {
        $sql = "SELECT * FROM rodztechusers WHERE username='$uname' AND users_pass ='$pass'";

        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) === 1)
        {
            $row = mysqli_fetch_assoc($result);
            
            if($row['username'] === $uname && $row['users_pass'] === $pass){
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                header("Location: homepage.php");
                exit();
            }
        }else{
        header("Location: index.php?error=Username or password maybe incorrect.");
        exit();
        }
    }
}else{
    header("Location: index.php");
    exit();
}