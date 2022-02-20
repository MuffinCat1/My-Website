<?php
include "db_conn.php";

if(isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['name'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    $name = validate($_POST['name']);

    if(empty($uname) && empty($pass)){
        header("Location: login.php?error=Please Enter the following requirments");
        exit();
    } else if(empty($uname)){
        header("Location: login.php?error=User Name is required");
        exit();
    } else if (empty($pass)){
        header("Location: login.php?error=Password is required");
        exit();
    } else {
        $sql = "INSERT INTO users (user_name, password, name) VALUES ('$uname', '$pass', '$name');";
        $result = mysqli_query($conn, $sql);

        if($result){
            header("Location: login.php?succes=The User $name was created succesfully");
            exit();
        } else {
            header("Location: login.php?error=The User wasn created please try again");
            exit();
        }
    } 
} else {
    header("Location: login.php");
    exit();
}
?>