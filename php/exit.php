<?php

session_start();

unset($_SESSION['rolead']);
session_destroy();

header("location: ../php/index.php");
?>