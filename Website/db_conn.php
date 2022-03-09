<?php
try{
    $sname = "localhost";
    $uname = "root";
    $password = "";

    $db_name = "user_db";

    $conn = mysqli_connect($sname, $uname, $password, $db_name);
} catch(\Exception $e){
    echo "activate your mySQL and add the user_db with all the values\n";
    exit();
}
?>
