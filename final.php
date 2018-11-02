<?php
if(!isset($_POST['submit']))
{
    header("Location: login.php");
    exit();
}
session_start();
$conn = mysqli_connect('localhost','root','', 'protfolio');  //connect to the database
if(isset($_POST['submit']))
{
   $filename = $_FILES['photo']['name'];
   $filetype = $_FILES['photo']['type'];
   $filetmp = $_FILES['photo']['tmp_name'];
   $image = move_uploaded_file($filetmp,"img/user_pic/filename");
}
$name_1st=$_SESSION['name'];
$phone_1st=$_SESSION['phone'];
$mail_1st=$_SESSION['mail'];
$gender_1st=$_SESSION['gender'];
$password_1st=$_SESSION['password'];
$name = mysqli_escape_string($conn, $name_1st);
$phone = mysqli_escape_string($conn, $phone_1st);
$mail = mysqli_escape_string($conn, $mail_1st);
$gender = mysqli_escape_string($conn, $gender_1st);
$password = mysqli_escape_string($conn, $password_1st);
$about = mysqli_escape_string($conn, $_POST['about']);
$education = mysqli_escape_string($conn, $_POST['education']);
$job = mysqli_escape_string($conn, $_POST['job']);
$face = mysqli_escape_string($conn, $_POST['face']);
$gmail = mysqli_escape_string($conn, $_POST['gmail']);
$twitter = mysqli_escape_string($conn, $_POST['twitter']);
// /////////////////////////////////////////////

$insert_query="INSERT INTO users (name,mail,phone,gender,password,about_me,education,job,face,gmail,twitter,'file_name','image')
          values ('$name', '$mail','$phone','$gender','$password','$about','$education','$job','$face','$gmail','$twitter','$filename','$image')";        
         
  mysqli_query($conn,$insert_query);
 mysqli_close($conn); 
 
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
    <div class="container" style="background-color: #65007F; height: 625px;"> 
        <div class="row">
                <h1 class="welcoming" style="font-size:50px; margin-top: -90px;">Congratulation !</h1>
                <div class="data" style="height: 300px;">
                <h1 class="welcoming" style="font-size:30px; margin-top: -30px;">Your  Protfolio Has Been Completed</h1>
                         <div class="col-md-12">
                            <a href="login.php"><button type="submit" class="btn" style="margin-left:300px;margin-top: 50px; width: 160px; height: 50px; font-size: 18px;" value="Finish" name="submit" onclick="on()">Sign in</button></a>
                        </div>
                </div>
        </div>
    </div>
</body>
</html>
