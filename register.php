<!-- <?php include 'config.php';?> -->
<?php

$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn= mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);

}
echo"";

// if(isset($_POST['submit'])){
//     $name=$_POST['name'];
//     $email=$_POST['email'];
//     $number=$_POST['contact_no'];
//     $password=$_POST['password'];

//     $sql = "INSERT INTO `user`( `Name`, `Email`, `Password`, `contact_no`) VALUES ($name,$email,$password,$contact_no)";
//     if(mysqli_query($conn, $sql)){
//         echo "Records inserted successfully.";
//     } else{
//         echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
//     }
// }

// session_start();
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['contact_no'];
    $password=$_POST['password'];

    $sql="INSERT INTO user (name,email,password,contact_no) VALUES ('$name','$email','$password','$number')";
    if(mysqli_query($conn, $sql)){
        echo "Records inserted successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }       
}
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body{
            background-image: url('bgimage.jpg');
            background-size: cover;
            
        }
        form{
            /* background-color: #fff; */
            margin-top: 6em;
            margin-left: 30em;
            margin-right: 10em;
            padding: 30px;
            box-shadow: 10px 10px 8px 10px #888888;
          

        }
    </style>
    <title>Register Page</title>
</head>
<body>
    <div class="container">
    <form method="POST">
    <div class="mb-3">
    <label for="exampleInputName" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="exampleInputName" name="name">
    </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputNumber" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="exampleInputNumber" name="contact_no">
    </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <br>
  Already Registered? <a href="login.php">Login</a>
</form>

    </div>
</body>
</html>