<?php
$_SESSION = array();
session_destroy();
header("location: logout-confirm");
exit;
?>