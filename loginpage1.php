<?php
session_start();
if(isset($_POST['sub'])){
    include "loginData.php";
    $email=$_POST["email"];
    $work=$_POST["work"];
    $password=$_POST["password"];
    $Conpassword=$_POST["Conpassword"];
    
    $stm=$database->prepare("INSERT INTO log-in(email,passowrd,name, work)
                         VALUES (:em,:pa,:num,:wk)");
    $stm->execute(array(//em,:,:,:
        "em" => $email,
        "pa" => $work,
        "num" => $password,
        "wk" => $Conpassword
    ));
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginall.css">
    <title>welcoom master</title>

</head>
<style>
    body {
        background-image: url('imgs/gg.jpg');
        background-attachment: fixed;
    }
</style>

<body>

    <div class="square">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="email" class="inp-email" name="email"  style="margin-top:60px;font-size: 20px;"><b>Entar suser Name</b>
            <input type="text" class="inp-email" name="work" style="margin-top:60px;font-size: 20px;"><b>Entar what do you work</b>
            <input type="password" class="inp-email" name="password" style="margin-top:60px;font-size: 20px;"><b>Entar password</b>
            <input type="password" class="inp-email" name="Conpassword" style="margin-top:60px;font-size: 20px;"><b>confirmed password</b>
            <a href="http://localhost/mdad/viewcar.php"><input type="submit" name="login1" class="login"><hr/></a>
        </form>
    </div>
</body>

</html>