<?php
	$name=$_POST["name"];
	$idade=$_POST["idade"];
	$naturalidade=$_POST["naturalidade"];
	$email=$_POST["email"];
	$tellig=$_POST["tellig"];
	$telwhats=$_POST["telwhats"];
	$endereco=$_POST["endereco"];
	$situacaoacademica=$_POST["situacaoacademica"];
	$formacao=$_POST["formacao"];
	$instituicao=$_POST["instituicao"];
	$termino=$_POST["termino"];
	$cargo1=$_POST["cargo1"];
	$empresa1=$_POST["empresa1"];
	$inicio1=$_POST["inicio1"];
	$saida1=$_POST["saida1"];
	$atividades1=$_POST["atividades1"];
	$cargo2=$_POST["cargo2"];
	$empresa2=$_POST["empresa2"];
	$inicio2=$_POST["inicio2"];
	$saida2=$_POST["saida2"];
	$atividades2=$_POST["atividades2"];
	$cargo3=$_POST["cargo3"];
	$empresa3=$_POST["empresa3"];
	$inicio3=$_POST["inicio3"];
	$saida3=$_POST["saida3"];
	$atividades3=$_POST["atividades3"];
	$informacao1=$_POST["informacao1"];
	$informacao2=$_POST["informacao2"];
	$informacao3=$_POST["informacao3"];
	$objetivo=$_POST["objetivo"];
	$salario=$_POST["salario"];
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

  </style>

 
<html>
<h1>$name</h1>
Idade: $idade | Naturalidade: $naturalidade <br>
Telefone Ligacao: $tellig | Telefone Whatsapp: $telwhats |  <br> 
Email: $email <br>  <br>

<h2> Objetivo </h2>
$objetivo <br>
Pretenção Salarial: $salario <br>

<h2> Formacao Academica </h2>

Situação Academica: $situacaoacademica | Formacao: $formacao <br>
Instituicao: $instituicao | Termino: $termino <br> <br>

<h2> Experiencias Profissionais </h2>
<b> Ultima Experiencia </b>
Cargo: $cargo1 <br>
Empresa: $empresa1 <br>
Inicio: $inicio1 | Saida: $saida1 <br>
Atividades: $atividades1<br> <br>

<b> Penultima Experiencia </b>
Cargo: $cargo2 <br>
Empresa: $empresa2 <br>
Inicio: $inicio2 | Saida: $saida2 <br>
Atividades: $atividades2<br> <br>

<b> Antepenultima Experiencia </b>
Cargo: $cargo3 <br>
Empresa: $empresa3 <br>
Inicio: $inicio3 | Saida: $saida3 <br>
Atividades $atividades3<br> <br>
	
<h2> Atividades Extra-Curriculares </h2>

Informacao 1: $informacao1 <br>
Informacao 2: $informacao2 <br>
Informacao 3: $informacao3 <br>
     

    </html>
";

// emails para quem será enviado o formulário
  $emailenviar = "contato@ibtp.com.br";
  $destino = $emailenviar;
  $assunto = "Curriculo para " . $objetivo;

// É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $headers .= 'From: $name <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";

$enviaremail = mail($destino, $assunto, $arquivo, $headers);


// verifica se enviou corretamente
if ($enviaremail) {
    echo "<script>alert('Currículo Enviado com Sucesso.');location.href='index.html';</script>";
}
else {
    echo "Não foi possível enviar o seu currículo.";
    echo "<b>Detalhes do erro:</b> " . $mail->ErrorInfo;
    echo "<script>location.href='index.html';";
}