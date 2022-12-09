<?php
$username="root";
$password= "";
$database =new PDO("mysql:host=localhost;dbname=datalog;",$username,$password);
if ($database) {
    echo 'conected data base sucses';
}

if($_SERVER['REQUEST_METHOD']=="POST"){
    $user_name=$_POST['email'];
    $password = $_POST['passowrd'];
    if(!empty($user_name) && !empty($password) && !is_numeric($username)){
        $query="select * from users where email='$username' limit 1";
        $result=mysqli_query($con,$query);
        if($result){
         if($result && mysqli_num_rows($result)>0){
             $user_data=mysqli_fetch_assoc($result);
             if($user_data['password']===$password){
                 $_SESSION['user_id']=$user_data['user_id'];
                 header("location: index.php");
                 die;
             }
         }
        }
        echo "wrong user name or password";
    }else{
        echo "please enter valid information";
    }
 }

 
?>