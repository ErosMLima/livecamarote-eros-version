 <?php


if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addlashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addlashes($_POST['message']);

$to = "eros.lima2020@gmail.com";
$subject = "Contato - Site Blog Eros Desenvolvedor Front End ";
$body = "Nome:" .$nome. "\n".
		"Email:" .$email. "\n".
		"Mensagem": .$mensagem;
$header = "From:eros.lima2020@gmail.com"."\r\n"
			."Reply-To:"$email"\e\n".
			"X=Mailer:PHP/".phpversion();


if (mail($to, $subject, $body, $header)){

	echo("Email enviado com sucesso!");

}else{
	echo("O Email não pode ser enviado!");


}




}
?>