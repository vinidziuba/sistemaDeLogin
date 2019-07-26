<?php
session_start();
require_once 'configDB.php';

if(isset($_SESSION['nomeUsuario'])){
    $nomeUsuário = $_SESSION["nomeUsuario"];
   // echo "Nome do Usuário: $nomeUsuário";
    $sql = $conexão->prepare("SELECT * FROM usuario WHERE nomeUsuario = ?");
    $sql->bind_param("s", $nomeUsuário);
    $sql->execute();
    $resultado = $sql->get_result();
    $linha = $resultado->fetch_array(MYSQLI_ASSOC);
    
    //$nomeUsuário = $linha["nomeUsuario"];
    $nomeCompleto = $linha["nome"];
    $email = $linha["email"];
    $criado = $linha["criado"];
    
}else{
    header("location:index.php");
}