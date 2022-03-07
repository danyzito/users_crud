<?PHP
require_once '../models/UsersModel.php';

$user_name=$_POST['user_name'];
$user_email=$_POST['user_email'];
$user_pass=$_POST['user_pass'];
$usuarios= new DevuelveUsiarios;
$usuarios->Add_User($user_name, $user_email, $user_pass);
header("Location:../inc/users.php");
?>