<?php
$senha = "1234@1234";

$embarelhar = password_hash($senha, PASSWORD_DEFAULT);

echo $embarelhar;
?>