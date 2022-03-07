<?PHP
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'users_crud';

try {
 
  $user_email=$_POST['user_email'];
  $user_pass=$_POST['user_pass'];
  $cont=0;
  $base = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql="SELECT * FROM users_table WHERE user_email= :user_email";
  $result=$base->prepare($sql);
  $result->execute(array(":user_email"=> $user_email));
      while( $registro= $result->fetch(PDO::FETCH_ASSOC)){
         if(password_verify($user_pass, $registro['user_pass'])){
            $cont++;
         }

      }  
  if($cont>0){

      session_start();
      $_SESSION['user_email']=$user_email;


       header ("location:../inc/users.php");


   }else{
      header ("location:../inc/login.php");
   }

} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}



		










//header("Location:../inc/users.php");
?>