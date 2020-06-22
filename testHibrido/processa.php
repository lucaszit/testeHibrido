<!--GUARDANDO AS INFORMAÇÕES DO FORMULARIO NO BANCO DE DADOS-->
<?php
    include_once("conexao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $sql = "insert into usuarios (nome,email,cpf,telefone) values ('$nome','$email','$cpf','$telefone')";
    $salvar = mysqli_query($conexao,$sql);
    $linhas = mysqli_affected_rows($conexao);
    mysqli_close($conexao);
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
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!--LINK COM ARQUIVO DE SCRIPTS DO JS-->
    <script src="printset.js"></script>
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
        <!--ESTRUTURA PAGINA DE CADASTRO CLIENTES-->
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
                <h1>Confirmação de Cadastro!</h1>
                <hr><br><br>
                <!--BLOCO PHP PARA MOSTRAR CONFIRMAÇÃO DE CADASTRO-->
                <?php 
                    if($linhas == 1){
                        print "Cadastro efetuado com sucesso!";
                    }else{
                        print "Cadastro não efetuado. <br> Já existe um usuário com este e-mail!";
                    }
                ?>
            </section>
        </div>
    </div>
</body>
</html>