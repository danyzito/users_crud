<?php

Class dbconnect {
		
		protected $conectionDb;

		public function conectionDb(){

			$conectionString = DB_DRIVER.':host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET;
			$this->conectionDb = new PDO($conectionString, DB_USER, DB_PASS);
			$this->conectionDb->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			$this->conectionDb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->conectionDb->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
			return $this->conectionDb;
				
			}
			
	}

	
?>
 