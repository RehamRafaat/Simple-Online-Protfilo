<?php
if(!isset($_POST['submit']))
{
    header("Location: login.php");
    exit();
}
session_start();
//finally, let's store our posted values in the session variables
$_SESSION['name'] = $_POST['name'];
$_SESSION['mail'] = $_POST['mail'];
$_SESSION['phone'] = $_POST['phone'];
$_SESSION['gender'] = $_POST['gender'];
$_SESSION['password'] = $_POST['password'];
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
    <link href="css/sign_up.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <style>
        .inp{
            margin-top: 170px;
            margin-left: -140px;
            width: 670px;
            height: 120px;
        }
    </style>
</head>
<body>
    <div class="container" style="background-color: #65007F; height: 2100px;"> 
        <div class="row">
                <h1 class="welcoming" style="font-size:50px; margin-top: -90px;">Complete Your Protfolio</h1>
                <div class="data" style="height: 1850px;">
                    <form action="final.php" method="post" name="myForm">
                        <div class="col-md-12">
                            <h2 style="margin-top:100px;float: left; margin-left: 40px; ">About You</h2>
                            <input class="inp" name="about" id="e_mail" placeholder="Give A Sammary About You"required>
                        </div>
                        <div class="col-md-12">
                                <h2 style="margin-top:100px;float: left; margin-left: 40px; ">Education</h2>
                                <input class="inp" name="education" id="e_mail" placeholder="Give A Sammary About Your Education"required>
                            </div>
                            <div class="col-md-12">
                                    <h2 style="margin-top:100px;float: left; margin-left: 40px; ">Job Experience</h2>
                                    <input style="margin-top:30px;float: left; margin-left: 40px; " class="inp" name="job" id="e_mail" placeholder="Give A Sammary About Your Job Experience"required>
                                </div>
                                <div class="col-md-12">
                                        <h2 style="margin-top:100px;float: left; margin-left: 40px; ">Facebook URL</h2>
                                        <input style="margin-top:30px;float: left; margin-left: 40px; height: 50px; " class="inp" name="face" id="e_mail" placeholder="Give A Sammary About Your Job Experience"required>
                                    </div>
                                    <div class="col-md-12">
                                            <h2 style="margin-top:100px;float: left; margin-left: 40px; ">Gmail Address</Address></h2>
                                            <input style="margin-top:30px;float: left; margin-left: 40px; height: 50px; " class="inp" name="gmail" id="e_mail" placeholder="Give A Sammary About Your Job Experience"required>
                                        </div>
                                        <div class="col-md-12">
                                                <h2 style="margin-top:100px;float: left; margin-left: 40px; ">Twitter Link</h2>
                                                <input style="margin-top:30px;float: left; margin-left: 40px; height: 50px; " class="inp" name="twitter" id="e_mail" placeholder="Give A Sammary About Your Job Experience"required>
                                            </div>
                                            <div class="col-md-12">
                                                <h2 style="margin-top:100px;float: left; margin-left: 40px;">Upload Photo</h2>
                                                <input style="margin-top:30px;float: left; margin-left: 40px; height: 50px; "  type="file" class="inp" name="photo">
                                            </div>
                                            <div class="col-md-12">
                                                    <button type="submit" class="btn" style="margin-left:300px;margin-top: 50px; width: 160px; height: 50px; font-size: 18px;" value="Finish" name="submit" onclick="on()">Finish</button>
                                                </div>
                    </form>
                </div>
        </div>
    </div>
</body>
</html>
