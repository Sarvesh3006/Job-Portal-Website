<?php
include("./database.php");



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

session_start();
if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM user WHERE 'email'='$email' AND 'password'='$password'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("location:index.php");
    }
    else{
        $error='emailid or password is incorrect';
    }
}

if(isset($_POST['job'])){
    $cname=$_POST['cname'];
    $position=$_POST['position'];
    $Jdesc=$_POST['Jdesc'];
    $CTC=$_POST['CTC'];

    $job= "INSERT INTO `jobs`(`cname`, `position`, `Jdesc`, `CTC`) VALUES ('$cname','$position','$Jdesc','$CTC')";
    // if(mysqli_query($conn,$sql)){
    //     echo "New Job Posted";
    // }
    // else{
    //     echo "Failed to Post the Job $sql. " . mysqli_error($conn);
    // }
    mysqli_query($conn,$job);

    
}


// if(isset($_POST['submit'])){
//     $name=$_POST['name'];
//     $qual=$_POST['qual'];
//     $apply=$_POST['apply'];
//     $year=$_POST['year'];


//     $sql="INSERT INTO `candidates`(`name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";
//     mysqli_query($conn,$sql);
// }


if(isset($_POST['applied'])){
    echo"inside";
    $name=$_POST['name'];
    $qual=$_POST['qual'];
    $apply=$_POST['apply'];
    $year=$_POST['year'];


    $sql="INSERT INTO candidates(name,apply,qual,year) VALUES ('$name','$apply','$qual','$year')";
    if(mysqli_query($conn,$sql))
    {
        header("location: ./career.php");
    }else{
        echo"Fails";
    }
}


mysqli_close($conn);
?>
