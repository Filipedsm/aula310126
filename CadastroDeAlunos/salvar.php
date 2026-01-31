<?php
include_once("conexao.php");

//pegar os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];

//Comando para inserir alunos
$sql = "INSERT INTO alunos (nome,email) VALUES ('$nome','$email')";

if (mysqli_query($conn,$sql)){
    echo "<h1>Aluno Cadastrado com sucesso!</h1>";
    echo "<a href='index.php'>Voltar</a>";
} else {
    echo "Erro ao cadastrar";
}
?>