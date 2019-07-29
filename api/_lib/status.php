<?php
class Status{
    // Conexão com o BD
    private $conn;
    private $table_name = "status";
 
    // Propriedades do objeto
   
    public $sta_ID;
    public $sta_NAME;
 
    // Construtor bd
    public function __construct($db){
        $this->conn = $db;
    }
	// Lendo produtos
	
	function read()
	{
 
		// SELECT QUERY
		$query = "SELECT sta.sta_ID, sta_NAME
                     FROM  
                    " . $this->table_name . " 
                     sta 
                     WHERE sta.sta_ID NOT IN (1,7,6)";
		// Preparando a QUERY
		$stmt = $this->conn->prepare($query);
	 
		// Executando a QUERY
		$stmt->execute();
	 
		return $stmt;
	}
}?>