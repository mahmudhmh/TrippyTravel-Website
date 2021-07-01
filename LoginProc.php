<?php

$error='';
if(isset($_POST['Log'])){
    if(empty($_POST['Email'])|| empty($_POST['Password'])){
        echo"Invalid Email or Password";
    }
    else{
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];
        $conn = mysqli_connect("localhost","root","");
        $db= mysqli_select_db($conn,"testdb");
        $query = mysqli_query($conn, "SELECT * FROM registration WHERE Password='$Password' AND Email='$Email'");

        $rows = mysqli_num_rows($query);
        if($rows==1){
            header("Location: index.php?msg=Success");

        }else{
            header("Location: login.php?msg=Failed");
        }
        mysqli_close($conn);
    }
}
?>