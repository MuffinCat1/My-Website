<?php
session_start();
include "db_conn.php";

if(isset($_POST['uname']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    $is_out = False;

    if(empty($uname) && empty($pass)){
        header("Location: loginPage.php?error=Please Enter the following requirments");
        exit();
    } else if(empty($uname)){
        header("Location: loginpage.php?error=User Name is required");
        exit();
    } else if (empty($pass)){
        header("Location: loginpage.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['user_name'] === $uname && $row['password'] === $pass){
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                setcookie("is_out", "False", time() + 2 * 24 * 60 * 60, "index.php");
                setcookie("user", $uname, time() + 2 * 24 * 60 * 60, "index.php");
                header("Location: index.php?user=$uname connected succesfully");
                exit();
            } else {
                header("Location: loginPage.php?error=Incorrect User name or password");
                exit();
            }
        } else {
            header("Location: loginPage.php?error=Incorrect User name or password");
            exit();
        }
    } 
} else {
    header("Location: loginPage.php");
    exit();
}
?>
