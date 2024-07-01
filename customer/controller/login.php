<?php
include 'db.php';

// Check if session is not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="SELECT * FROM users WHERE email='$email'";
    $result=$conn->query($sql);
    if($result->num_rows > 0){
        $row=$result->fetch_assoc();
        if(password_verify($password, $row['password'])){
            $_SESSION['email']=$row['email'];
            echo "<script>alert('Login successfully');window.location='../index.php'</script>";
        } else {
            echo "<script>alert('Invalid email or password');window.location='../login.php'</script>";
        }
    }
    else{
        echo "<script>alert('Invalid email or password');window.location='../login.php'</script>";
    }
}
?>
