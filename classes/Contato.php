<?php
class Contato {
   private $id, $nome, $telefone;
   
   
   public function getID(){
       return $this->id;
   }
   public function setID($id){
       $this->id = $id;
   }
   public function getNome(){
       return $this->nome;
   }
   public function setNome($nome){
       $this->nome = $nome;
   }
   public function getTelefone(){
       return $this->telefone;
   }
   public function setTelefone($telefone){
       $this->telefone = $telefone;
   }
}
