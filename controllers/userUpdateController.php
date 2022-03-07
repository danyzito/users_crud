<?PHP
require_once '../models/UsersModel.php';
$id=$_POST['id'];
$user_name=$_POST['user_name'];
$user_email=$_POST['user_email'];
$usuarios= new DevuelveUsiarios;
$usuarios->Update_User($id, $user_name, $user_email);
header("Location:../inc/users.php");
?>