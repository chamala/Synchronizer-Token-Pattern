<?php

session_start();
$_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));

echo $_SESSION['token'];

  ?>
