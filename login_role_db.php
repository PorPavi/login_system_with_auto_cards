<?php 

    session_start();

    if (isset($_POST['email'])) {

        include('server.php');

        $email = $_POST['email'];
        $password = $_POST['password'];
        //$passwordenc = md5($password);
        $passwordenc = $password;

        $query = "SELECT * FROM userrole WHERE email = '$email' AND password = '$passwordenc'";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {

            // successfull login notification
            $_SESSION['success'] = "Successfully login";

            $row = mysqli_fetch_array($result);

            $_SESSION['userid'] = $row['id'];
            $_SESSION['user'] = $row['firstname'] . " " . $row['lastname'];
            $_SESSION['userlevel'] = $row['role'];
            $_SESSION['email'] = $row['email'];

            // query subjects from dteachers
            $querysub = "SELECT * FROM dteachers WHERE mail = '$email'";
            $resultsub = mysqli_query($conn, $querysub);
            $rowsub = mysqli_fetch_array($resultsub);

            $_SESSION['allsub'] = $rowsub['coursesID'];

            if ($_SESSION['userlevel'] == 't') {
                header("Location: t_home_auto.php");
            }

            if ($_SESSION['userlevel'] == 's') {
                header("Location: s_home.php");
            }
        } else {
            // unsuccessfull login notification
            $_SESSION['error'] = "Wrong username or password";
            //echo $_SESSION['error'];

            //echo "<script>alert('User หรือ Password ไม่ถูกต้อง);</script>";

            header("Location: loginnew.php");
        }

    } else {
        header("Location: loginnew.php");
    }


?>