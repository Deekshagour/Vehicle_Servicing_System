<?php
session_start();
   $_SESSION['username']= null;
   $_SESSION['userlevel'] = null;
   unset($_SESSION['username']);
    unset($_SESSION['userlevel']);
header('location:login.php');
    

?>