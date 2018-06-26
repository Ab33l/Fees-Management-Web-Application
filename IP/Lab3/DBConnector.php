<?php
	
	/**
	* 
	*/
	class DBConnector
	{

		public $pdo;

		private $dsn = "mysql:host=localhost;dbname=btc3205;charset=utf8mb4";

		private $options = [
			PDO::ATTR_EMULATE_PREPARES 	=> false,
			PDO::ATTR_ERRMODE			=> PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC
		];
		
		function __construct()
		{
			try {
				$this->pdo = new PDO($this->dsn, "root", "", $this->options);
			} catch (Exception $e) {
				error_log($e->getMessage());
				exit('An error occured.');
			}
		}

		public function closeDatabase()
		{
			mysqli_close($this->conn);
		}

	}
	

?>