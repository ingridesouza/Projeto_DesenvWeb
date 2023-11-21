<?php
// Configurações do banco de dados
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "cadastro";

// Conexão com o banco de dados
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

//recuperar e verificar se ja existe
$cpf = $_POST['cpf'];
$cpf = mysqli_real_escape_string($conn, $cpf);
$sql ="SELECT cpf FROM cadastro.pessoas WHERE cpf='$cpf'";
$retorno = mysqli_query($conn,$sql);

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
$resultado = mysqli_query($conn, $sql);
echo"USUÁRIO CADASTRADO COM SUCESSO!<BR>";

}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1;url=login.html">
    <title>Redirecionando...</title>
</head>
</body>
</html>