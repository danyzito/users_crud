<?php
require '../config/conexion.php';
	class DevuelveUsiarios extends Conexion
	{

			public function DevuelveUsiarios(){
			parent::Conexion();

		}
		public function get_Users()
		{
			$sql="SELECT * FROM users_table";
			$consult=$this->conexion_db->prepare($sql);
			$consult->execute(array());
			$result=$consult->fetchAll (PDO::FETCH_ASSOC);
			$consult->closeCursor();
			return $result;
			$this->conexion_db=null;
	
		}

		public function get_User($id)
		{
			$id=$_GET['id'];
			$sql="SELECT * FROM users_table WHERE id= :id";
			$consult=$this->conexion_db->prepare($sql);
			$consult->bindValue(":id", $id);
			$consult->execute();
			$result=$consult->fetchAll (PDO::FETCH_ASSOC);
			$consult->closeCursor();
			return $result;
			$this->conexion_db=null;
		}

		public function del_User($id)
		{
			$id=$_GET['id'];
			$sql= "DELETE FROM users_table WHERE id = :id";
			$consult=$this->conexion_db->prepare($sql);
			$consult->bindValue(":id", $id);
			$consult->execute();
			$consult->closeCursor();
			$this->conexion_db=null;
		}

	
		public function Update_User($id, $user_name, $user_email)
		{
			$id=$_POST['id'];
			$user_name=$_POST['user_name'];
			$user_email=$_POST['user_email'];
			$sql="UPDATE users_table SET user_name= :user_name , user_email= :user_email WHERE id = :id";
			$consult=$this->conexion_db->prepare($sql);
			$consult->bindValue(":id", $id);
			$consult->bindValue(":user_name", $user_name);
			$consult->bindValue(":user_email", $user_email);
			$consult->execute();
			$consult->closeCursor();
			$this->conexion_db=null;
		}

		public function Add_User($user_name, $user_email)
		{
			$user_name=$_POST['user_name'];
			$user_email=$_POST['user_email'];
			$user_pass=$_POST['user_pass'];
			$user_pass= password_hash($_POST['user_pass'], PASSWORD_DEFAULT);
			$sql="INSERT INTO users_table (user_name, user_email, user_pass) VALUES (:user_name, :user_email, :user_pass)";
			$consult=$this->conexion_db->prepare($sql);
			$consult->bindValue(":user_name", $user_name);
			$consult->bindValue(":user_email", $user_email);
			$consult->bindValue(":user_pass", $user_pass);
			$consult->execute();
			$consult->closeCursor();
			$this->conexion_db=null;
			
		}

		public function Login_User($user_email, $user_pass)
		{
			$user_email=$_POST['user_email'];
			$user_pass=$_POST['user_pass'];
			$sql="SELECT * FROM users_table WHERE user_email= :user_email AND user_pass= :user_pass ";
			$consult=$this->conexion_db->prepare($sql);
			$consult->bindValue(":user_email", $user_email);
			$consult->bindValue(":user_pass", $user_pass);
			$consult->execute();
			$result=$consult->fetchAll (PDO::FETCH_ASSOC);
			$consult->closeCursor();
			return $result;
			$this->conexion_db=null;
		}
				public function user_logout(){
					session_start();
					session_unset();
					session_destroy();
					header('Location: login.php');

				}
		
	}
 
?>