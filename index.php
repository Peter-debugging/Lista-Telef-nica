<!DOCTYPE html>
<html>
    <head>
        <title>Lista Telefônica</title>
        <link rel="stylesheet" href="css/geral.css"/>
        <link rel="stylesheet" href="css/estilotabela.css"/>
        <link rel="stylesheet" href="css/botoes.css"/>
        <?php require_once'funcoesIndex.php';?>
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
                    <a href="editar.php"><input type="button" value="Adicionar" class="botaonav"></a>
                </nav>
                
                <table>
                    <thead>
                        <tr class="headers">
                            <th class="top-right">ID</th>
                            <th>NOME</th>
                            <th>TELEFONE</th>
                            <th class="top-left">AÇÃO</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                        listar();
                       ?>
                    </tbody>
                </table>
            <div>
            </section>
            <footer>
            Feito com &hearts; por Pedro Henrique
            </footer>
        </div>
       
        
    </body>
</html>