<?php
// required cabecalho
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// Inclui as paginas de con_bd e agenda
include_once '../config/conn.php';
include_once '../date.php';

$database = new Database();
$db = $database->getConnection();
 
$date = new Date($db);
 
// Pega dados do post
$data = json_decode(file_get_contents("php://input"));
 
// Seta valores a serem inseridos
 $date->cal_usr_ID = $_POST[user_id];
 $date->cal_NOME = $_POST[nome];
 $date->cal_DATE = $_POST[data];
// cria compromisso

if($date->create()){
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