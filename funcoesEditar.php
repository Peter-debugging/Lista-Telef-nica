<?php
require_once "classes/require.php";
function getNome(){    
    if(isset($_POST["nome"])){
       return $_POST["nome"]; 
    }        
}
function getTelefone(){
    if($_SERVER["REQUEST_METHOD"] == "POST")
        return $_POST["telefone"];
}
function getId(){
     if($_SERVER["REQUEST_METHOD"] == "POST")
        return $_POST["id"];
     else{
         return -1;
     }
}
function salvar(){
    $mensagem = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $funcoesContato = new FuncoesContato();
        $contato = new Contato();
        $contato->setNome($_POST["nome"]);
        $contato->setTelefone($_POST["telefone"]);
        if ($_POST["id"] == -1){
            $mensagem = $funcoesContato->salvar($contato);           
        }else{
            $contato->setID($_POST["id"]);
            $mensagem = $funcoesContato->update($contato);
        }
       
    }else{
        $mensagem = "Nenhuma informação foi repassada";
    }
    return $mensagem;
}
function validar(){
    return $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["salvar"]);
}