<?php
	$para = ‘contato@jandersongarcia.com.br’;
	$assunto = ‘Enviando e-mail com o PHP’;
	$mensagem = ‘Olá, este é um e-mail teste.’;
	if(mail($para,$assunto,$mensagem)){
		echo "Mensagem enviada com sucesso.";
	} else {
		echo "Sua mensagem não pode ser enviada. Tente novamente.";
	}
?>
