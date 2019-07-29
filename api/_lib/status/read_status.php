<?php
// Cabeçalho da requisição
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/conn.php';
include_once '../config/section.php';
include_once '../status.php';
 
// Instancia bd  e status
$database = new Database();
$db = $database->getConnection();
 

$status = new Status($db);
 
// Requisição
$stmt = $status->read();
$num = $stmt->rowCount();
 
// Verifica se foi encontrado mais de 0 dados
	if($num>0)
	{
		// Array
		$status_arr=array();
		//$status_arr["dados"]=array();
		
	 
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			extract($row);
			$status_item=array(
				"sta_ID" => $sta_ID,
				"sta_NAME" =>$sta_NAME
			);
	 
			array_push($status_arr, $status_item);
		}
		
		$result= json_encode($status_arr);
	}
 
else{
    $msg=  json_encode(
        array("message" => "Nenum status encontrado.")
    );
}
?>