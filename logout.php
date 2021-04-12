<?php
session_start();
   $_SESSION['email_id']= null;
   $_SESSION['userlevel'] = null;
   unset($_SESSION['email_id']);
    unset($_SESSION['userlevel']);
header('location:default.php');
    

?>