<?php
	
	/**
	* 
	*/
	class DBConnector
	{

		public $pdo;

		private $dsn = "pgsql:host=localhost;port=5432;dbname=btc3205";

		private $options = [
			PDO::ATTR_EMULATE_PREPARES 	=> false,
			PDO::ATTR_ERRMODE			=> PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC
		];
		
		function __construct()
		{
			try {
				//$this->pdo = new PDO($this->dsn, "postgres", "123456", $this->options);
				$this->pdo = new PDO("pgsql:host=localhost;dbname=btc3205", "postgres", "123456");
				return $this->pdo;
			} catch (Exception $e) {
				error_log($e->getMessage());
				echo $e;
				exit('Could not connect to database');
			}
		}

		public function closeDatabase()
		{
			mysqli_close($this->pdo);
		}

	}
	

?>