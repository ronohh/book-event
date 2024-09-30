
<?php

    $name=$_POST['name'];
    $email=$_POST['email'];
    $IdNumber=$_POST['IdNumber'];
    $password=$_POST['password'];

    //database conection//

    $conn = new mysqli('localhost','root','','events');

    if($conn->connect_error){
        die('connection failed').$conn->connect_error;
    }else
    $stmt=$conn->prepare("insert into sign_up(name,email,IdNumber,password) value(?,?,?,?)");
    $stmt->bind_param("ssss",$name,$email,$IdNumber,$password);
    $stmt->execute();
    header('location:login.php');
    echo"registration succesful";
    $stmt->close();
    $stmt->close();

?>