<?php 
if(isset($_POST['sub'])){
    include "loginData.php";
    include "login.php";
    include "loginpage1.php";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginall.css">
    <title>Reception</title>
</head>
<style>
    body {
        background-image: url('imgs/gg.jpg');
        background-attachment: fixed;
    }

    .st {
        width: 350px;
        height: 40px;
        margin-left: 30px;
        margin: 10px;
        background-color: rgb(85, 10, 79);
        border-radius: 50px;
    }
</style>

<body>
    <div class="square-rec">
        <center>
            <h1> Welcome to the electronic car showroom </h1>
        </center>
    </div>
    <div class="square-lg">
        <div class="dd"><br>
            <h1><b><i>Do you already have an account?</i> </b></h1>
        </div>
        <a href="http://localhost/mdad/login.php"> <button type="button" class="st"><b>I have an account,
                    login</b></button>
            <hr />
        </a>
        <a href="http://localhost/mdad/loginpage1.php"> <button type="button" class="st"><b>I do not have an
                    account, create a new account</b></button>
            <hr />
        </a>
        <!--  <a href="file:///C:/xampp/htdocs/mdad/login.html"> <button translate="yes" class="st"><b>no i`m dont amlek acont</b></button><hr/></a>-->
    </div>
</body>

</html>