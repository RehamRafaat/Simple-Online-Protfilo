<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Protfolio</title>

    <link rel="shortcut icon" href="img/icon-pencil-purple.png">
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    
</head>
<body>
        <div class="container">
                <div class="row">
                   <div class="col-md-12 welcoming">
                        <h1 id="test_status" style="font-size:50px;">Welcome To Simple Protfolio</h1>
                        
                                <form method="post" action="Login_Inc.php">
                                    <input name="mail" id="e_mail" style="margin-left: 2px; width: 310px;margin-right: 10px; height: 45px; border-radius: 5px; margin-top: 9%; background-color: rgba(218, 174, 243, 0.548); border-color: rgb(62, 2, 77); font-size: 20px; color:white; padding-left: 10px;" placeholder="user123@gmail.com" required>
                                    <input name="pass" id="back" style="margin-left: 2px; width: 310px; height: 45px; border-radius: 5px; margin-top: 10%; background-color: rgba(218, 174, 243, 0.548); border-color: rgb(62, 2, 77);font-size: 20px; color:white; padding-left: 10px;" type="password" placeholder="1256ssdc" required>
                                    <div class=" col-md-12">
                                        <input type="submit" class="btn" style="margin-top: 50px; width: 150px; height: 50px; font-size: 18px;" value="Sign in" name="submit" onclick="on()">
                                    </div>
                                </form>
                                <p class="About_Head_title" style="color:white; font-size: 23px; margin-top: 150px;">If you haven't account on Small Geek please <a class="g"href="sign_up.php" style="text-decoration: none;">Sign up</a></p>
                         </div>
                        
                   </div>
             
              </div>
</body>