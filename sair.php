<?php
session_start();
seesion_destroy();
header("Location: login.php");
exit;
?>