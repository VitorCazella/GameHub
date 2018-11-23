<?php
namespace controle{
	include 'processaAcesso.php';

	$controle = new \processaAcesso\ProcessaAcesso;

	if(@$_POST['enviar']){
		$login = $_POST['login'];
		$senha = $_POST['senha'];
		$usuario = $controle->verificaAcesso($login, $senha);

		if($usuario[0]['id_tipo_acesso'] == 1){
			header("Location: paginas/menu.html");
		}if($usuario[0]['id_tipo_acesso'] == 2){
			header("Location: paginas/menu.html");
		}else{
			header("Location: paginas/erro.html");
		}
	}elseif ($_POST['cadastrar']){
		$login = $_POST['login'];
		$senha = md5($_POST['senha']);
		$tipo_usuario = $_POST['tipo_usuario'];
		$arr = array('login_usuario' => $login, 'senha_usuario' => $senha, 'id_tipo_acesso' => $tipo_usuario);

		if(!$controle->cadastraUsuario($arr)){
			echo 'Aconteceu algum erro!';
		}else{
			$tipo_acesso = $controle->verificaAcesso($login, $senha);
			if($tipo_acesso[0]['id_tipo_acesso' == 1]){
				header("Location: paginas/Pagina1.html");
			}elseif ($tipo_acesso[0]['id_tipo_acesso'] == 2){

			}header("Location: paginas/Pagina2.html");
		}
	}
}
?>