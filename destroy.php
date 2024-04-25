<?php
session_start();

session_destroy();

header("location: http://localhost/belajarphp/ujian/ujian.php");

?>