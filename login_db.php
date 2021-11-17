<?php
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
    
        //$password = md5($password);
        $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in";
            header("location: homenew.php");
        } else {
            array_push($errors, "Wrong username or password");
            $_SESSION['error'] = "Wrong username or password, please try again";
            header("location: loginnew.php");
        }

    }

?>