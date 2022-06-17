<?php
    $name=$_POST["name"];
    $tel=$_POST["tel"];
    $email=$_POST["email"];
    $cidade=$_POST["cidade"];
  $data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

$arquivo = "
  <style type='text/css'>
  body {
  margin:0px;
  font-family:Verdane;
  font-size:14px;
  color: #000000;
  }
  a{
  color: #666666;
  text-decoration: none;
  }
  a:hover {
  color: #FF0000;
  text-decoration: none;
  }

nav{
	font-size: 16px;
	text-decoretion: bold;
	font-family: arial;
	
}
  </style>
    <html>
	<nav>Projeto Acolher - Cuidador de Idoso </nav>$name <br>
        <nav>Nome: </nav>$name <br>
	    <nav>Telefone: </nav>$tel <br>
        <nav>Email: </nav>$email <br>
       <nav>Cidade: </nav>$cidade <br>
O cadastro foi feito no dia <b>$data_envio</b> às <b>$hora_envio</b>
     
    </html>
";

// emails para quem será enviado o formulário
  $emailenviar = "cadastro@ibtp.com.br";
  $destino = $emailenviar;
  $assunto = "PA CUIDADOR DE " . $name;

// É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $name <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";

$enviaremail = mail($destino, $assunto, $arquivo, $headers);


// verifica se enviou corretamente
if ($enviaremail) {
    echo "<script>alert('Cadastro Efetuado com Sucesso! Aguarde que um de nossos coordenadores entrará em contato.');location.href='index.html';</script>";
}
else {
    echo "Não foi possível enviar a mensagem.";
    echo "<b>Detalhes do erro:</b> " . $mail->ErrorInfo;
    echo "<script>location.href='index.html';";
}