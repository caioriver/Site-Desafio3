<?php 
	$usuario_autenticado = false;
	$usuarios = array(
			array('login'=>'admin',
					'senha' => 'admin'
				),
	);


	foreach($usuarios as $user){
		if($user['login'] == $_POST['login'] 
			&& $user['senha'] == $_POST['senha']){
			$usuario_autenticado = true;
		}
	}


	if($usuario_autenticado){
		echo "<script>alert('Usuário autenticado')</script>";
		header('Location:imprimir.php');
	}else{
		header('Location:login.php?falha=erro');
	}	
	 
?>