<?php
require_once "classes/require.php";

function getNome(){
    if(isset($_POST["nome"])){
        return $_POST["nome"];
    }
}
function getID(){
 if(isset($_POST["id"])){
     return $_POST["id"];
 } 
 return ""; 
}
function getTelefone(){
    if(isset($_POST["telefone"])){
        return $_POST["telefone"];
    }
}
function validar(){
    return isset($_POST["excluir"]);
}
function excluir(){
    if(getID() != "" and isset($_POST["excluir"])){
        $funcoesContato = new FuncoesContato();
        return $funcoesContato->excluir(getID());
    }
    else{
        return "Não foi possível identificar o ID deste contato";
    }
}