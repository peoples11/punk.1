<?php

session_start();
ob_start();
session_destroy();
header("Location: http://localhost/punk.1/index.php");

?>