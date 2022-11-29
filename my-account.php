<?php
session_start();

if(isset($_SESSION['user'])){
$user = $_SESSION['user'];
print_r($user);
}else{ 
    echo "No logged in user session was found.";
}
?>