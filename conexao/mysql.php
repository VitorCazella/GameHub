<?php
namespace Mysql{
	define('db_server', "127.0.0.1");
	define('db_username', "root");
	define('db_password', "cazella1998");
	define('db_name', "TFVitor");

	class mysql{
		var $db, $conn;

		public function __construct($server, $database, $username, $password){
			$this->conn = @mysql_connect($server, $username, $password);
			$this->db = @mysql_select_db($database, $this->conn);
		}

		public function select($tabela, $colunas = "*", $where = "1 = 1"){
			$sql = "SELECT $colunas FROM $tabelas $where";

			$result = $this->executar($sql);

			while($row = @mysql_fetch_array($result, MYSQL_ASSOC)){
				$return[] = $row;
			}
			return $return;
		}

		public function insert($tabela, $dados){
			foreach ($dados as $key => $value) {
				$keys[] = $key;
				$insertvalues = implode(', ', $insertvalues);

				$sql = "INSERT INTO $tabela ($keys) VALUES ($insertvalues)";

				return $this->executar($sql);
			}
		}

		public function executar($sql){
			$return_result = @mysql_query($sql, $this->conn);
			if ($return_result) {
				return $return_result;
			} else {
				$this->sql_error($sql);
			}
		}

		public function sql_error($sql){
			echo @mysql_error($this->conn) . '<br>';
			die('error: ' . $sql);
		}
	}
}
?>