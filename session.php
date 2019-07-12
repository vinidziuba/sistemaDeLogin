<?php

session_start();
require_once 'configDB.php';

if(isset($_SESSION['nomeUsuario'])){
    $nomeUsuário = $_SESSION["nomeUsuario"]; 
    echo "Nome do Usuário $nomeUsuário";
}else    header ("location:index.php");

