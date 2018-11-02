<?php

session_start();

if(isset($_POST['submit']))
{
    $conn = mysqli_connect("localhost", "root", "", "protfolio");  //connect to the database
    $email=mysqli_real_escape_string($conn,$_POST['mail']);
    
    $password=mysqli_real_escape_string($conn,$_POST['pass']);
     //Error Handlers
    //Check For Empty Feilds
    if(empty( $email)||empty($password))
    {
        header("Location: login.php?error=data");
        exit();
    }
    else{
        $sql="SELECT*FROM users WHERE mail='$email'";
        $result=mysqli_query($conn,$sql);
        $resultCheck=mysqli_num_rows($result);
        if($resultCheck<1)
        {

            header("Location: login.php?error=mail");
        }
        else
        {
            if($row=mysqli_fetch_assoc($result))
            {
                if($password != $row['password'])
                {
                   header("Location: login.php?error=password");
                   exit(); 
                }
                else
                {
                    //login the user here
                    $_SESSION['id']=$row['id'];
                    $_SESSION['name']=$row['name'];
                    $_SESSION['mail']=$row['mail'];
                    $_SESSION['phone']=$row['phone'];
                    $_SESSION['password']=$row['password'];
                    $_SESSION['gender']=$row['gender'];
                    $_SESSION['about']=$row['about_me'];
                    $_SESSION['education']=$row['education'];
                    $_SESSION['job']=$row['job'];
                    $_SESSION['face']=$row['face'];
                    $_SESSION['gmail']=$row['gmail'];
                    $_SESSION['twitter']=$row['twitter'];
                     header("Location: index.php?login=success");
                     exit();
                }
            }
        }
    }
}
else{
     header("Location: login.php?error=veryerror");
}

?>