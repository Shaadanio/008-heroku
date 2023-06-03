<?php
declare(strict_types=1);
session_start();
if ($_POST['user_name'] !== '') {
  $_SESSION['name'] = $_POST['user_name'];
}

$path = $_SERVER["HTTP_REFERER"];
header("Location: ${path}");
