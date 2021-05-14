<?php
	$para = ‘contato@jandersongarcia.com.br’;
	$assunto = ‘Enviando e-mail com o PHP’;
	$mensagem = ‘Olá, este é um e-mail teste.’;
	
	// Indica que o formato do e-mail é html
	$headers = 'MIME-Version: 1.0’. "\r\n";
	$headers. = 'Content-type: text/html; charset=iso-8859-1’. "\r\n";
	$headers. = 'From: $para ';

	if(mail($para,$assunto,$mensagem, $headers)){
		echo "Mensagem enviada com sucesso.";
	} else {
		echo "Sua mensagem não pode ser enviada. Tente novamente.";
	}
?>
