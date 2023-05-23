<?php
session_start();

// Elimina i cookie
setcookie('uid', '', time()-3600, "/");
setcookie('email', '', time()-3600, "/");
setcookie('username', '', time()-3600, "/");

// Distruggi la sessione
session_unset();
session_destroy();

// Reindirizza alla pagina di login
header("Location: ../login/login.php");
exit();
?>
