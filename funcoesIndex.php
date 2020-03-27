<?php
require_once "classes/require.php";

function listar(){
    $funcoesContato = new FuncoesContato();
    $lista = $funcoesContato->getAll();
    foreach($lista as $contato){
         echo '<tr> <td>';
         echo $contato->getID();
         echo '</td> <td>';
         echo $contato->getNome();
         echo'</td><td>';
         echo $contato->getTelefone();
         
         echo '</td><td>';
         echo '<form style="display:inline;" method="POST" action="editar.php">';
          echo '<input hidden value="'.$contato->getID().'" name="id">';
          echo '<input hidden value="'. $contato->getNome(). '" name="nome">';
          echo '<input hidden value="'.$contato->getTelefone().'" name="telefone">';
         echo '<input type="submit" class="botaoeditar" value = "Editar"/></form>';
          echo '<form style="display:inline;" method="POST" action="exclusao.php">';
          echo '<input hidden value="'.$contato->getID().'" name="id">';
          echo '<input hidden value="'. $contato->getNome(). '" name="nome">';
          echo '<input hidden value="'.$contato->getTelefone().'" name="telefone">';
         echo '<input type="submit" class="botaoexcluir" value = "Excluir"/></form>';
         echo'</td></tr> ';
    }
}

