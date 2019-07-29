<?php
include_once '../api/_lib/config/section.php';
    session_unset();
    session_destroy();
    header('Location: index.php'); 
?>