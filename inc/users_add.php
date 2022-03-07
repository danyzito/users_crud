<?php
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
					<h1>Nuevo Usuario</h1>
				</div>
					
				<div class="add-form">
					<form id="forms" name="nuevo" method="POST" action="../controllers/userAddController.php" autocomplete="off" >
							
						
								<input type="text"  id="user_name" name="user_name" placeholder="Ususario"/>
						
					
								<input type="email"  id="user_email" name="user_email" placeholder="Email" required="required" />
						
								
					
								<input id="user_pass" name="user_pass" placeholder="Contraseña" type="password"/>
								<a><img id="pass_icon" src="../assets/img/icons/eye-icon.png"  /></a>
					
					</form>
						<a class="btn"  id="send_btn">Guardar</a>
											
						<p class="message" id="msjBox"></p>
				
						
					</div>
				</div>
		</div>
	</div>
<?php include_once 'footer.php'; ?>