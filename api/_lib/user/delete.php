<?php
// required cabecalho
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
 
// Inclui as paginas de con_bd e agenda
include_once '../config/conn.php';
include_once 'agenda.php';
 
// Pega a conexão do bd
$database = new Database();
$db = $database->getConnection();
 
// Cria a agenda
$agenda = new Agenda($db);
 
// get product id
$data = json_decode(file_get_contents("../_templates/ativis/atv4.php"));
 
// Seta id a ser deletado
$agenda->id = $data->id;
 
// Deleta o compromisso
if($agenda->delete()){
    echo '{';
        echo '"message": "Compromisso foi deletado."';
    echo '}';
}
 
// Caso não delete o compromisso
else{
    echo '{';
        echo '"message": "Compromisso não encontrado."';
    echo '}';
}
?>