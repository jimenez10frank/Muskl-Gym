<?php

// i destroy the session to logout here
session_start();

session_destroy();

header("Location: login-user.php");
exit;






?>
