<?php

//Variáveis de conexão com o banco de dados
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "sistemaDeLogin";

//Objeto MySQLi de conexão com o banco de dados
$conexão = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if($conexão->connect_error){
    //Se deu erro, mata a aplicação!
    die("Não foi possível conectar ao Banco de dados: " 
            . $conexão->connect_error );
}else{
    // só para dubug
    // echo "Conectado com sucesso!";
}
