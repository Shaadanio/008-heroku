<?php

session_start();
session_unset();

$path = $_SERVER["HTTP_REFERER"];
header("Location: ${path}");