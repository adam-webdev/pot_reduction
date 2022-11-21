<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['devisi']);
header('Location: ../app/index.php');
// login.php