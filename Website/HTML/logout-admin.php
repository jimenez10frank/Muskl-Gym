<?php

// i destroy the session to logout here
session_start();

session_destroy();

header("Location: login-admin.php");
exit;




?>