<?php
if (isset($_POST['loging'])) {
    $email = "lara";
    $password = "123456";
    $email1 = $_POST['email'];
    $pass = $_POST['password'];
    if ($email1 == $email && $pass == $password) {
        $rem = $_POST['remember'];
        if (isset($_POST['remember']) ){
            setcookie('email', $email, time() + 60 * 60 * 7);
            setcookie('pass', $pass, time() + 60 * 60 * 7);
        }
        session_start();
        $_SESSION['email'] = $email;header("location: h1.php");
		} else {
        include('index.php');
    }
} else {
    include('index.php');
}


?>