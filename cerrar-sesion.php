<?php

session_start();

$_SESSION = [];

header('Location: /Admin/index.php');