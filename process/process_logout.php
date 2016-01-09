<?php
session_start();
unset($_SESSION["username"]);
header("Location: /EA/login.php");
?>
