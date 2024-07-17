<?php

include("./database.php");


if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("location:index.php");
    }
    else{
        $error='emailid or password is incorrect';
    }

} 





?>