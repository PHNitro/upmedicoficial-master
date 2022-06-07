<?php
session_start();
unset($_SESSION['perfil']);
header('Location: ../index.php');
?>