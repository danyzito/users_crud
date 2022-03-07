<?php

 require 'config.php';

 class Conexion{
        protected $conexion_db;

         public function Conexion(){
            try{
                  $conectionString = DB_DRIVER.':host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET;
                  $this->conexion_db = new PDO($conectionString, DB_USER, DB_PASS);
                  $this->conexion_db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                  $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  $this->conexion_db->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
                  return $this->conexion_db;
            }catch (Exception $e){
                  echo "Error de Conexión";
            }
            






         }}
     
  
?>