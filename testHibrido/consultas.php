<?php 
    include_once("conexao.php");
    $filtro = isset($_GET['filtro'])?$_GET['filtro']:"";
    $sql = "select * from usuarios where nome like '%$filtro%' order by nome";
    $consulta = mysqli_query($conexao,$sql);
    $registros = mysqli_num_rows($consulta);
?>
<!-- INICIO HTML -->  
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printset | Pulseiras, Tickets e Ingressos</title>
    <!--LINK COM ARQUIVO DE ESTILOS DO CSS-->
    <link rel="stylesheet" type="text/css" href="printsetPhp.css" />
</head>
<body>
    <!-- INICIO DIV PAGINA-->
    <div class="pagina">
        <!--INICIO DIV HEADER DA PÁGINA-->
        <header class="header-pagina">
            <div class="header-conteudo">
                <strong class="logo">
                    <img src="imagens/logo_printset.png" alt="printset logo" width="148" height="43">
                </strong>
                <!--NAVEGAÇÃO DE PULSEIRAS, INGRESSOS E TICKET-->
                <nav class="navegacao" data-action="navegacao">
                    <ul class="navegacao-ul" role="menu" tabindex="0" >
                        <li class="navegacao-li1" role="presentation">
                            <a class="navegacao-li1-a" tabindex="-1" role="menuitem">
                                <span class="span1">Pulseiras</span>
                            </a>
                        </li>
                        <li class="navegacao-li2" role="presentation">
                            <a class="navegacao-li2-a" tabindex="-1" role="menuitem">
                                <span class="span1">Ingressos</span>
                            </a>
                        </li>
                        <li class="navegacao-li3" role="presentation">
                            <a class="navegacao-li3-a" tabindex="-1" role="menuitem">
                                <span class="span1">Ticket</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- CONTINUAÇÃO HEADER BOTÃO DE ENTRAR-->
                <ul class="header-entrar">
                    <li class="header-entrar-li">
                        <a class="entrar-a" href="printset.html">Voltar</a>
                    </li>
                </ul>
                <!--BOTÃO DE MEUS PEDIDOS-->
                <li class="nav-pedidos">
                    <a id="pedidos-a">Meus Pedidos</a>
                </li>
                <!--CONJUNTO DE PEDIDOS E CONTADOR DE PEDIDOS (CIRCULO COM O NUM. NO CENTRO)-->
                <div class="carrinho" data-bloc="carrinho">
                    ::before
                    <a class="acao-carrinho">
                        ::before
                        <span class="texto-carrinho">Carrinho</span>
                        <span class="contador-carrinho">
                            <span class="contador-carrinho-num">
                                0
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </header>
        <!--ESTRUTURA PAGINA DE CADASTRO DE CLIENTES-->
        <div class="container">
            <nav class="container-nav">
                <ul class="container-menu">
                    <a href="entrar.php" class="container-a">
                        <li class="container-li">Cadastro</li>
                    </a>
                    <a href="consultas.php" class="container-a">
                        <li class="container-li">Consultas</li>
                    </a>
                </ul>
            </nav>
            <section class="container-section">
                <h1>Consultas</h1>
                <hr><br><br>
                <!--FORMULÁRIO PARA FILTRAR DADOS MOSTRADOS NA TABELA-->
                <form method="get" action="">
                    Filtrar por Nome: <input type="text" name="filtro" class="campo" required autofocus>
                    <input type="submit" value="Pesquisar" class="btn">
                </form>
                <!--BLOCO PHP PARA EXIBIR DADOS EM FORMATO DE TABELA-->
                <?php 
                    print "Resultado da pesquisa com a palavra <strong>$filtro</strong><br><br>";
                    print "$registros registros encontrados.";
                    print "<br><br>";
                    print "<table>";
                        print "<tr>";
                            print "<th> Nome </th>";
                            print "<th> E-mail </th>";
                            print "<th> CPF </th>";
                            print "<th> Telefone </th>";
                            print "<th> Alterar </th>";
                            print "<th> Excluir </th>";
                        print "</tr>";
                        while($exibirRegistros = mysqli_fetch_array($consulta)){
                            $codigo = $exibirRegistros[0];
                            $nome = $exibirRegistros[1];
                            $email = $exibirRegistros[2];
                            $cpf = $exibirRegistros[3];
                            $telefone = $exibirRegistros[4];
                            print "<tr id='linha-$codigo'>";
                                print "<th>$nome</th>";
                                print "<th>$email</th>";
                                print "<th>$cpf</th>";
                                print "<th>$telefone</th>";
                                print "<th><a href='alteracao.php'><img src='imagens/alteracao.jpg' width='20' height='20' style='cursor: pointer'></th>";
                                print "<th><img src='imagens/excluir.jpg' onclick='deletar($codigo)' width='20' height='20' style='cursor: pointer'></th>";
                            print "</tr>";
                        }
                    print "</table>";
                    mysqli_close($conexao);
                    ?>
            </section>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--LINK COM ARQUIVO DE SCRIPTS DO JS-->
    <script src="printset.js"></script>
</body>
</html>