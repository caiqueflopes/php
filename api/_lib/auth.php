<?php
class Login{
 
    // Conexão com o BD
    private $conn;
    private $table_name = "usuarios";
 
    // Propriedades do objeto
   
    public $log_usr_ID;
    public $log_usr_NAME;
	public $log_usr_LNAME;
    public $log_usr_EMAIL;
	public $log_usr_PASSWORD;
 
    // Construtor bd
    public function __construct($db){
        $this->conn = $db;
    }
	// Lendo produtos
	
	// used when filling up the update product form
    function authentication()
    {
        // query to read single record
        $query = "SELECT usu.usr_ID,
                         usr_NAME,
                         usr_LNAME,
                         usr_EMAIL,
                         usr_PASSWORD                 
                    FROM ". $this->table_name ." usu
                    WHERE usu.usr_EMAIL='".$this->log_usr_EMAIL."' AND usu.usr_PASSWORD='".$this->log_usr_PASSWORD."'";
        //print_r($query);
                    // prepare query statement
        $stmt = $this->conn->prepare( $query );
    
        // binda o email que foi enviado
        $stmt->bindParam(1, $this->log_usr_EMAIL);
    
      
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        // Seta os valores do objeto
        $this->log_usr_ID = $row['usr_ID'];
        $this->log_usr_NAME = $row['usr_NAME'];
        $this->log_usr_LNAME = $row['usr_LNAME'];
        $this->log_usr_EMAIL = $row['usr_EMAIL'];
    }
	
	
}
?>