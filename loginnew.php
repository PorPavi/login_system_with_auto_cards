<?php

    session_start();
    include('server.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="login.css">
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    
    /* Full-width input fields */
    input[type=email], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    
    /* Set a style for all buttons */
    button {
      background-color: black;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }
    
    button:hover {
      opacity: 0.8;
    }
    
    /* Center the image and position the close button */
    
    
    span.psw {
      float: right;
      padding-top: 16px;
    }
    
    
    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
         display: block;
         float: none;
      }}
      
    </style>
    </head>
    
    <body>
        <div class="grid">
            <div class="page-logo content">
                <div align="center"><img src="image/logo.jpg" width="700px" height="500px"></div>
            </div>
            <div class="page-login content">
                <form class="modal-content animate" action="login_role_db.php" method="post">
                    <?php if (isset($_SESSION['error'])) : ?>
                        <div class="error">
                            <h3>
                                <?php
                                    echo $_SESSION['error'];
                                    unset($_SESSION['error']);
                                ?>
                            </h3>
                        </div>
                    <?php endif ?>
                    <?php if (isset($_SESSION['msg'])) : ?>
                        <div class="error">
                            <h3>
                                <?php
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                ?>
                            </h3>
                        </div>
                    <?php endif ?>
                    <div class="container">
                        <h2>Sign in</h2>
                        <label for="email"><b>Email</b></label>
                        <input type="email" placeholder="Enter Email" name="email" required>
                        <label for="password"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required>
                        <button type="text" name="login_user">Login</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                    </div>
                    <div class="container" style="background-color:#f1f1f1">
                        <span class="psw">Forgot <a href="#">password?</a></span>
                    </div>
                </form>
            </div>
        </div>
    </body>
    </html>