<?php
session_start();
if(isset($_SESSION['userID']))
{
$panel = './../../panelClass/panel.php';
require $panel;

$pane = new panel();
$config = './../../../accounts/config.php';
require $config;
$pdo = new PDO("mysql:host=$server;dbname=$database", $usr, $passwd);
}
else
{
    //cookies ze zlego logowania
    header('Location:./../../../../index.php');
}

$pane->getUserArticles($pdo,$_SESSION['userID'],$_POST['date'],'Temat')
?>