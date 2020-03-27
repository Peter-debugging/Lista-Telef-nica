<?php
class Conexao {
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "listatelefonica";    
    
    public function novaConexao(){
        $mysqli  = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);  
        
        return $mysqli;
    }
}
