<?php

session_start();
session_unset();

$path = $_SERVER["HTTP_HOST"];
header("Location: http://${path}/index.php");