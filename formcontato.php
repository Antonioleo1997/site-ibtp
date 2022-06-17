<?php
    $assunto=$_POST["destino"];
    $name=$_POST["name"];
    $tel=$_POST["tel"];
    $cidade=$_POST["cidade"];
    $msg=$_POST["msg"];
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
        <nav>Assunto: </nav>$assunto <br>
        <nav>Nome: </nav>$name <br>
	    <nav>Telefone: </nav>$tel <br>
        <nav>Mensagem: </nav>$msg <br>
       
Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b>
     
    </html>
";

// emails para quem será enviado o formulário
  $emailenviar = "contato@ibtp.com.br";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site de " . $name;

// É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $name <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";

$enviaremail = mail($destino, $assunto, $arquivo, $headers);


// verifica se enviou corretamente
if ($enviaremail) {
    echo "<script>alert('Mensagem enviada!');location.href='contato.html';</script>";
}
else {
    echo "Não foi possível enviar a mensagem.";
    echo "<b>Detalhes do erro:</b> " . $mail->ErrorInfo;
    echo "<script>location.href='contato.html';";
}