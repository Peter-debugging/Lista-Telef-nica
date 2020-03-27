<!DOCTYPE html>
<html>
    <head>
        <?php
            require_once'funcoesEditar.php';            
            $formHidden = validar()? "hidden" : "";
            $mensagemHidden = validar()? "":"hidden";
        ?>
        <title>Lista Telefônica</title>
        <link rel="stylesheet" href="css/geral.css"/>
        <link rel="stylesheet" href="css/botoes.css"/>
        <link rel="stylesheet" href="css/forms.css" />
        <link rel="stylesheet" href="css/mensagem.css"/>
    </head>
    <body>
        <div id="pagina" >
             <header>
                <div id="cabecalho">
                        <h1>Lista Telefônica</h1>
                </div>            
            </header>
            <section>
            <div id="corpo">
                <nav>
                    <a href="index.php"><input type="button" value="Voltar" class="botaonav"></a>
                    <a <?php echo $mensagemHidden; ?> href="editar.php"><input type="button" value="Adicionar Novo" class="botaonav"></a>
                </nav> 
                <form method="post" action="" <?php echo $formHidden; ?>>
                    <input  hidden name="id" value="<?php echo getId(); ?>"/>
                    <input  hidden name="salvar" value="1"/>    
                    <table>
                        <tr>
                            <td>
                                 <label for="nome">Nome</label>
                            </td>
                            <td>
                                <input value="<?php echo getNome() ?>" type="Text" name="nome" id="nome"/><span class="red" >*</span>                                
                            </td>
                        </tr>
                        <tr>
                            <td>
                                
                            </td>
                            <td>
                                <div id="mensagemnome" class="red" hidden>
                                    Insira um nome válido!
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="telefone">Telefone</label>
                            </td>
                            <td>
                                <input value="<?php echo getTelefone()?>" type="number" name="telefone" id="telefone" /><span class="red">*</span>
                                
                                
                            </td>                               
                        </tr>
                        <tr>
                            <td>
                                
                            </td>
                            <td>
                                <div id="mensagemtelefone" class="red" hidden>
                                    Insira um telefone válido!
                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="2">
                                 <input id="salvar" type="submit" value="Salvar" class="botaonav"/>
                            </td>
                        </tr>                        
                    </table>
                    
                </form>
                <div class="mensagem"<?php echo $mensagemHidden ;?>>
                    
                   <?php echo salvar(); ?>                    
                </div>
            <div>
            </section>
            <footer>
            Feito com &hearts; por Pedro Henrique
            </footer>
        </div>
         <script src="js/validar.js">
         </script>
        
    </body>
</html>