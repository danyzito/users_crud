<?php
include_once 'header.php';
$msj="";
   if(isset($_GET['msj'])){
      $msj= "Session no Iniciada Correctamente";
   }

?>
<body>

<div class="container">
<div class="menu"><a id="back_btn"><img id="back__btn" src="../assets/img/icons/cross-icon.png" /></a></div>	
<div class="add">
   <div class="add-screen">
      <div class="app-title">
         <h1>Login de usuario</h1>
      </div>
         
      <div class="add-form">
         <form id="forms" method="POST" action="../controllers/loginController.php" autocomplete="off" >
                  <input type="text"  id="user_email" name="user_email" placeholder="Email"/>
                  <div><input id="user_pass" name="user_pass" placeholder="Contraseña" type="password"/>
                  <a><img id="pass_icon" src="../assets/img/icons/eye-icon.png"  /></a></div>
                  <input type ="submit" class="btn"> 
         </form>
            
                           
            <p class="message" id="msjBox"><?php echo $msj;?></p>
      
            
         </div>
      </div>
</div>
</div>
<?php include_once 'footer.php'; ?>

