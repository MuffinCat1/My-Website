<?php
session_start();
setcookie("is_out", "True");

session_unset();
session_destroy();

header("Location: index.php");
?>
