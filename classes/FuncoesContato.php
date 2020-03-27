<?php
require_once"Contato.php";
require_once"Conexao.php";
class FuncoesContato {
   public function getAll(){
       $lista = [];
       $classeConexao = new Conexao();
       $conexao = $classeConexao->novaConexao();
       $resultados =  $conexao->query("SELECT * FROM contatos ORDER BY nome");
       if($conexao->errno){
           return "$conexao->error";
       }else{
         for($i = 0; $i < $resultados->num_rows; $i++){
           $resultados->data_seek($i);
           $row = $resultados->fetch_assoc();
           $contato = new Contato();
           $contato->setID($row['id']);
           $contato->setNome($row['nome']);
           $contato->setTelefone($row['telefone']);
           $lista[] = $contato;
         }
       }  
       return $lista;      
       
   }
   public function salvar($contato){
       $classeConexao = new Conexao();
       $conexao = $classeConexao->novaConexao(); 
       
       $contato->setID($this->getNextID());
       $id = $contato->getID();
       $nome = $contato->getNome();
       $telefone = $contato->getTelefone();
       if(!$conexao->query( "INSERT INTO contatos (id, nome, telefone) VALUES ($id, '$nome', '$telefone')")){
           return "Não foi possível salvar o contato";
       }
       return "Contato salvo com sucesso!";
   }
   public function update($contato){
       $classeConexao = new Conexao();
       $conexao = $classeConexao->novaConexao(); 
       
       $id = $contato->getID();
       $nome = $contato->getNome();
       $telefone = $contato->getTelefone();
       if(!$conexao->query( "UPDATE contatos SET nome = '$nome', telefone = '$telefone' WHERE id = $id")){
           return "Não foi possível salvar o contato";
       }
       return "Contato salvo com sucesso!";
       
   }
   public function excluir($id){
       $classeConexao = new Conexao();
       $conexao = $classeConexao->novaConexao();
       if(!$conexao->query("DELETE FROM contatos WHERE id = $id")){
           return "Não foi possível excluir o contato";
       }
       return "Contato excluido com sucesso";
       
   }
   private function getNextID(){
       $classeConexao = new Conexao();
       $conexao = $classeConexao->novaConexao();
       $query = $conexao->prepare("SELECT max(id) AS id FROM contatos LIMIT 1");
       $query->execute();
       $res =  $query->get_result();
       $maxid = $res->fetch_assoc();
       
       return  $maxid["id"] + 1;
   }
}
