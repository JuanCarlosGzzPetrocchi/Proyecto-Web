<?php
  session_start(); 
  $user = $_SESSION['usuarionombre']; 
if(isset($_POST['logout'])) {
session_destroy();
header("Location: loginMaestro.php");
}
?>