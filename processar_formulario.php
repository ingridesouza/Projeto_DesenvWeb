<!DOCTYPE html>
<html lang="pt-br">
<header>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <litle>FORMULARIO</title>
</head>
<body>
<?php
$conexao = mysqli_connect("localhost","root","","cadastro");
if(!$conexao){
echo"NÃO CONECTADO";
}
echo"CONECTADO AO BANCO>>>>>>>";

//recuperar e verificar se ja existe
$cpf = $_POST['cpf'];
$cpf = mysqli_real_escape_string($conexao, $cpf);
$sql ="SELECT cpf FROM cadastro.pessoas WHERE cpf='$cpf'";
$retorno = mysqli_query($conexao,$sql);

if(mysqli_num_rows($retorno)>0){
    echo"CPF JÁ CADASTRADO";
}else{

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$data_nascimento = $_POST['data_nascimento'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmar_senha = $_POST['confirmar_senha'];
$area_interesse = $_POST['area_interesse'];
$cursos = $_POST['cursos'];

$sql = "INSERT INTO cadastro.pessoas(cpf,nome,telefone,data_nascimento,cep,estado,cidade,bairro,email,senha,confirmar_senha,area_interesse,cursos) 
values ('$cpf','$nome','$telefone','$data_nascimento','$cep','$estado','$cidade','$bairro','$email','$senha','$confirmar_senha','$area_interesse','$cursos')";
$resultado = mysqli_query($conexao, $sql);
echo">>USUÁRIO CADASTRADO COM SUCESSO!<BR>";

}

?>
</body>
</html>