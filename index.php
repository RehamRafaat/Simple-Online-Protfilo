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
    <link href="css/style.css" rel="stylesheet">
    <style>
        .btn{
    background-color: #330040;
    border-color: white;
    color: white;
}
.btn:hover{
    background-color: white;
    border-color:#330040;
    color:#330040;
}
    </style>
</head>

<body>

	<!-- Header -->
    <header>
       <div class="container">
           <div class="row">
               <div class="col-md-6  cont">
                   <h1 style="font-size:40px;"><?php echo $_SESSION['name'];?></h1>
                   <h2><?php echo $_SESSION['mail'];?></h2>
                   <h2><?php echo $_SESSION['phone'];?></h2>
                   <h2><?php echo $_SESSION['gender'];?></h2>
               </div>
               <div class="col-md-6 col-sm-12 pic" style="background-image:url(img/user_pic/<?php echo $_SESSION['mail'];?>); background-size:cover; background-position:center;">

               </div>
           </div>
       </div>
    </header>

    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2 class="section-heading">About Me</h2>
                    <p class="text-light"><?php echo $_SESSION['about'];?></p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                   <div class="cont">
                       <h1 style="font-size:40px;">Education</h1>
                       <h2 style="color:#CA00FF;"><?php echo $_SESSION['education'];?></h2>
                   </div>
                </div>
                <div class="col-sm-6" style="margin-left: 30px;">
                        <div class="col-sm-5">
                                <div class="cont">
                                    <h1 style="font-size:40px;">Job Experience</h1>
                                    <h2 style="color:#CA00FF;"><?php echo $_SESSION['job'];?></h2>
                                </div>
                             </div>
                </div>                
                
            </div>
        </div>
    </section>  

    
	<!-- Footer -->
    <footer class="page-footer">
        <div class="final">
        	<div class="container">
                <h2 class="section-heading" style="color:white;">Contacts</h2>
                <a href=""><img class="gt"style="width: 50px;"src="img/50-Best-Facebook-Logo-Icons-GIF-Transparent-PNG-Images-83.png"/></a>
                <a href=""><img class="gt"style="width: 50px;"src="img/097304-3d-transparent-glass-icon-social-media-logos-twitter-logo-square.png"/></a>
                <a href=""><img class="gt"style="width: 50px;"src="img/kisspng-social-media-computer-icons-symbol-logo-facebook-email-whatsapp-address-phone-instagram-ic-5ae13b32882210.0979576215247101945576.png"/></a>
        	</div>
            <div class="col-md-12">
              <a href="logout.php"><button type="submit" class="btn" style="margin-top: 20px; width: 160px; height: 50px; font-size: 18px;" value="logout" name="submit" onclick="on()">Log out</button></a>
            </div>
        </div>
        
    </footer>

</body>

</html>
