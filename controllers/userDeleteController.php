<?php
require_once '../models/UsersModel.php';
$id=$_GET["id"];
$usuarios= new DevuelveUsiarios;
$usuarios->del_User($id);
header("Location:../inc/users.php");
?>