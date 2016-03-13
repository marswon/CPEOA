<?php
session_start();
session_destroy();
echo "<script>window.location.href='/CSR/login.php';</script>";
?>