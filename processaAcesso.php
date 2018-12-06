<?php	
namespace processaAcesso{
	include 'conexao/mysql.php';
	
	use Mysql as Mysql;
	
	class ProcessaAcesso {
		
		var $db;
		
		public function __construct(){
			$conexao = new Mysql\mysql(db_server, db_name, db_username, db_password);
			$this->db = $conexao;
		}
		
		public function verificaAcesso($login, $senha){
			$select = $this->db->select('acesso.tb_usuario', '*', " where login_usuario = '$login' and senha_usuario = '$senha'");
			return $select;
		}

		public function cadastraUsuario($dados){
			$insert = $this->db->insert('acesso.tb_usuario', $dados);
			return $insert;
		}
	}
}
?>
