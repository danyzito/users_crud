<?php

require_once '../models/UsersModel.php';
$usuarios= new DevuelveUsiarios;
$array_usuarios=$usuarios->get_users();

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
		<div class="mimi">
			<div float="rigth">Usuario : <?php echo  $_SESSION["user_email"]."<br>"?><a href="../controllers/logout.php">Logout</a></div>
		<div class="mini-screen">
			<div class="app-title">
				<h1>Listado de Usuarios</h1>
			</div>
			<div class="menu">
				<a href="users_add.php" class="btn">Agregar</a>
			</div>
			<div class="table-responsive">
				<table  width="80%" class="table">
					<thead>
						<tr class="table-primary">
							<th>Usuario</th>
							<th>Mail</th>
							<th>Date</th>
							<th></th>
					</thead>
					
					<tbody>
						<?php foreach($array_usuarios as $dato) {
							?>
						<tr>
								<td class="email"><?php echo $dato["user_name"] ?></td>
								<td class="email"><?php echo $dato["user_email"] ?></td>
								<td><?php echo $dato["fecha_alta"] ?></td>
								<td>
									<a id="btn_update" class="imagen" href="user_update.php?id=<?php echo $dato['id'];?>"><img src="../assets/img/icons/edit-icon.png" /></a>
									<a id="btn_update" class="imagen" href="../controllers/userDeleteController.php?id=<?php echo $dato['id'];?>" onclick="return confirm('Confirma Eliminar Registro?');"     >
                        			<img src="../assets/img/icons/trash-icon.png" /></a></td>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
		</div>
		</div>
<?php include_once 'footer.php'; ?>