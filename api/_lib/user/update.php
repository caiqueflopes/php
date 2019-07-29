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
 
// Conexão banco
$database = new Database();
$db = $database->getConnection();
 
//instancia agenda
$agenda = new Agenda($db);
 
// Pega dados do post
$data = json_decode(file_get_contents("../_templates/ativis/atv4.php"));
 
// Seta o ID a ser editado
$agenda->id = $data->id;
 
// Seta os valores a serem editados
$agenda->descricao = $data->descricao;
$agenda->prioridade = $data->prioridade;
$agenda->posicao = $data->posicao;
$agenda->data = date('Y-m-d H:i:s');
 
// Update da agenda
if($agenda->update()){
    echo '{';
        echo '"message": "Agenda foi Atualizado."';
    echo '}';
}
 
// Se não for feito o update
else{
    echo '{';
        echo '"message": "Agenda não atualizada."';
    echo '}';
}
?>