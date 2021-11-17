<?php

    session_start();

    if (!isset($_SESSION['email'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: loginnew.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['email']);
        header('location: loginnew.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Student Homepage</title>
    <link rel="stylesheet" href="head-style.css">
</head>

<body>
    <!--ส่วนข้อมูลตรงกลาง-->
    <!--container-fluid : ปรับให้เต็มจอและปรับเปลี่ยนตามขนาดจอ-->
    <div class="container-fluid">
        <div class="row">
            <header class="page-header content">
                <div class="topnav">
                    <a href="#contact">Notification</a>
                    <a href="homenew.html">MY COURSE</a>
                    <li style="float: left;"><a href="loginnew.php">LEARN</a></li>
                </div>
            </header>
        </div>
        <div class="row">
            <h3>ปีการศึกษา 2564 ภาคต้น Welcome, <strong><?php echo $_SESSION['user']; ?></strong></h3>
            <a href="homenew.php?logout='1'" style="color: red;">Logout</a>
        </div>
        <div class="row">
            <div class="row row-cols-4 g-3 bg-light">
                <!--Subject1-->
                <div class="col">
                    <a href="Subject1.html" style="text-decoration:none; color: #000;">

                        <div class="card">
                            <img src="image/logo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Subject1</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </a>

                </div>
                <!--Subject2-->
                <div class="col">
                    <div class="card">
                        <img src="image/logo.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Subject2</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <!--Subject3-->
                <div class="col">
                    <div class="card">
                        <img src="image/logo.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Subject3</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="image/logo.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Subject4</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="image/logo.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Subject5</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="image/logo.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Subject6</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>