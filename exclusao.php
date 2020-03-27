<!DOCTYPE html>
<html>
    <head>
        <?php
            require_once'funcoesExclusao.php';            
            $formHidden = validar()? "hidden" : "";
            $mensagemHidden = validar()? "":"hidden";
        ?>
        <title>Lista Telefônica</title>
        <link rel="stylesheet" href="css/geral.css"/>
        <link rel="stylesheet" href="css/botoes.css"/>
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
                <form <?php echo $formHidden; ?> method="post" action="">
                    <div class="mensagem"<?php echo $formHidden ;?>>
                        Você tem certeza que quer excluir o contato <?php echo getNome();?>? 
                        <input hidden name="excluir" value="1"/>
                        <input hidden name="id" value="<?php echo getID()?>"/>
                        <p>   
                            <input  type="submit" value="Sim">
                            <a href="index.php"><input type="button" value="Não"/></a>
                        </p>
                    </div>
                </form>
                <div class="mensagem"<?php echo $mensagemHidden ;?>>
                  <?php echo excluir() ?>               
                </div>
            <div>
            </section>
            <footer>
            Feito com &hearts; por Pedro Henrique
            </footer>
        </div>
        
    </body>
</html>