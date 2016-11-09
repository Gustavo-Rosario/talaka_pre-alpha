<title>TALAKA - Saindo...</title>
<?php
session_start();
session_destroy();
header("location: /");
?>