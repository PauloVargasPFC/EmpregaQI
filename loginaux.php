<?php
include('processo.php');

if(empty($_POST['login']) || empty($_POST['senha'])){
    header('Location: login.php');
    exit();
}

$login = mysqli_real_escape_string($conexao, $_POST['login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select USU_ID, USU_NOME from usuario where USU_EMAIL = '{$login}' and USU_SENHA = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){

} else{
    
}