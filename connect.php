<?php

    $Fullname = $_POST['Fullname'];
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Country = $_POST['Country'];
    $Address = $_POST['Address'];
    $Number = $_POST['Number'];
    $gender = $_POST['gender'];

    if(!empty($Fullname)||!empty($Username)||!empty($Email)||!empty($Password)||!empty($Country)||!empty($Address)||!empty($Number)||!empty($gender)){
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "testdb";

        $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

        if(mysqli_connect_error()){
            die('connect error(' . mysqli_connect_errno().')'. mysqli_connect_error());
        }else{
            $SELECT = "SELECT email From registration where email = ? Limit 1";
            $INSERT = "INSERT Into registration (Fullname,Username,Email,Password,Country,Address,Number,gender) values(?,?,?,?,?,?,?,?)";
                $stmt = $conn->prepare($SELECT);
                $stmt->bind_param("s",$Email);
                $stmt->execute();
                $stmt->bind_result($Email);
                $stmt->store_result();
                $rnum = $stmt->num_rows;

                if($rnum==0){
                    $stmt->close();
                    $stmt = $conn->prepare($INSERT);
                    $stmt->bind_param("sssssssi",$Fullname,$Username,$Email,$Password,$Country,$Address,$Number,$gender);
                    $stmt->execute();
                    header("Location: login.php?msg=Signedup");
                } else{
                    echo "Error";
                

                }
                $stmt->close();
                $conn->close();
        }
    }else{
        echo "All Fields are required";
        die();

    }

?>