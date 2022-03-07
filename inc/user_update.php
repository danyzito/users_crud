
<?php
require_once '../models/UsersModel.php';
$id=$_GET["id"];
$usuarios= new DevuelveUsiarios;
$array_usuarios=$usuarios->get_user($id);
foreach($array_usuarios as $dato)


include_once 'header.php';
?>

<body>	
<?php
			session_start();
			if(!isset($_SESSION["user_email"])){
			header ('location: login.php?msj=1');
			}
?>

<div class="container">
<div class="menu"><a id="back_btn"><img id="back__btn" src="../assets/img/icons/cross-icon.png" /></a></div>		

<div class="add">

			<div class="add-screen">
			
				<div class="app-title">
					<h1>Modificar usuario</h1>
				</div>
				<div class="forms">
					<form id="nuevo" name="nuevo" method="POST" action="../controllers/userUpdateController.php" autocomplete="off">
				
				<input type="hidden" id="id" name="id" value="<?php echo $dato["id"]; ?>" />
				
				<div class="form-group">
					<input type="text" class="form-control" id="user_name" name="user_name" value="<?php echo $dato["user_name"]?>" placeholder="Usuario" />
				</div>
				
				<div class="form-group">
					<input type="text" class="form-control" id="user_email" name="user_email" value="<?php echo $dato["user_email"]?>" placeholder="Emal"  />
				</div>
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
			</div>
				</div>
		</div>
	</div>
	<?php include_once 'footer.php'; ?>
