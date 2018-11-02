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
</head>
<body>
    <div class="container" style="background-color: #65007F; height: 1400px;"> 
        <div class="row">
                <h1 class="welcoming" style="font-size:50px; margin-top: -90px;">Welcome To Simple Protfolio</h1>
                <h1 class="welcoming" style="font-size:20px; margin-top: -120px;">Create A new Protfolio</h1>
                <div class="data">
                    <form action="complete_profile.php" method="post" name="myForm">
                        <div class="col-md-12">
                            <h2 style="margin-top:100px;">Name</h2>
                            <input class="inp" name="name" id="name" placeholder="Enter Your Name" required>
                        </div>
                        <div class="col-md-12">
                                <h2>Email</h2>
                                <input class="inp" name="mail" id="mail" placeholder="Enter Valid Mail" required>
                            </div>
                            <div class="col-md-12">
                                    <h2>Phone</h2>
                                    <input class="inp" name="phone" id="phone" placeholder="01234567891" required>
                                </div>
                                <div class="col-md-12">
                                        <h2>Gender</h2>
                                        <input class="inp" name="gender" id="Gender" placeholder="Male or Female" required>
                                    </div>
                                    <div class="col-md-12">
                                            <h2>Password</h2>
                                            <input class="inp" type="password" name="password" id="pass" placeholder="*******" required>
                                        </div>
                                        <div class="col-md-12">
                                                <h2>Upload Photo</h2>
                                                <input type="file"class="inp" name="mail">
                                            </div>
                                        <div class="col-md-12">
                                              <button type="submit" class="btn" style="margin-left:300px;margin-top: 50px; width: 160px; height: 50px; font-size: 18px;" value="Go to step 2" name="submit" onclick="on()">complete profile</button>
                                            </div>
                                        
                    </form>
                </div>
        </div>
    </div>
</body>
</html>
