<?php
session_start();
unset($_SESSION['username']);
echo "you have been successfully logged out<a href=\"index.php\">Click here</a>";
?>