<?php
	class Conexion{
		private $servername;
		private $username;
		private $password;
		private $dbname;

		/**
	      * Crea una conexion
	      * @return Conexion Conexion a la bbdd
	     */
		public function conectar(){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname= "tesis";
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}
			return $conn;
		}
	}

?>