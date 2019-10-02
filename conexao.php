	<?php

		class Conectar{
		
			public function Conecta(){
			
			try{	
				$connection = new PDO('mysql:host=localhost;dbname=meubanco', "root", "");
				//var_dump($connection);
				return $connection;
			}
			catch (PDOException $exc) {
            print($exc->getMessage());
		   }
		
	}
		}

	?>

