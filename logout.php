<?php
session_start();
session_destroy();
header('Location: client_article.php');
exit;
?>