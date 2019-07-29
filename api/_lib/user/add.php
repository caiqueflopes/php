<?php
// required cabecalho
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// Inclui as paginas de con_bd e agenda
include_once '../config/conn.php';
include_once '../user.php';

$database = new Database();
$db = $database->getConnection();
 
$user = new User($db);
 
// Pega dados do post
$data = json_decode(file_get_contents("php://input"));
 
// Seta valores a serem inseridos
 $user->usr_NAME = $_POST[name];
 $user->usr_LNAME = $_POST[lname];
 $user->usr_EMAIL = $_POST[mail];
 $user->usr_STREET = $_POST[street];
 $user->usr_NUMBER = $_POST[number];
 $user->usr_PHONE = $_POST[phone];
 $user->usr_PASSWORD = md5($_POST[passw]);
// cria compromisso

if($user->create()){
    echo '{';
        echo '"message": "Compromisso foi criado."';
    echo '}';
}
 
// Se não cirar
else{
    echo '{';
        echo '"message": "Dado não encontrado."';
    echo '}';
}
?>