<?php
// Cabeçalho da requisição
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/conn.php';
include_once '../config/section.php';
include_once '../date.php';
 
// Instancia bd  e date
$database = new Database();
$db = $database->getConnection();
 

$date = new Date($db);
 
// Requisição
$stmt = $date->read();
$num = $stmt->rowCount();
 
// Verifica se foi encontrado mais de 0 dados
	if($num>0)
	{
		// Array
		$date_arr=array();
		
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			extract($row);
			$date_item=array(
				"title" => $cal_NOME,
				"start" => $cal_DATE,
				"constraint" =>$sta_NOME
			);
	 
			array_push($date_arr, $date_item);
		}
		
        $result= json_encode($date_arr);
	}else{
    $msg=  json_encode(
        array("message" => "Nenum date encontrado.")
    );
}
?>