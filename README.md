# Teste Hibrido

Teste para medir conhecimentos de promgramação em Frontend ou Backend, a escolha do programador, proposto pela empresa Hibrido.
Esta versão não é a final, apenas um inicio do teste para mostrar a curva de aprendizado. A ideia foi começar pela parte de Front
e copiar o site. Mas na metade do caminho, resolvi fazer a parte de Back e desenvolver o sistema de cadastro de clientes e foi aqui
que resolvi focar mais.

### Como rodar o Projeto

Para executar o projeto, primeiro precisamos fazer a instalação de alguns softwares:

- > XAMPP ou outro programa para abrir um servidor Local. Neste projeto, foi usado o XAMPP.
  - > [Clique aqui para download do XAMPP](https://www.apachefriends.org/pt_br/download.html)
- > Algum software para leitura dos códigos. Neste projeto, foi usado o Visual Studio Code.
  - > [Clique aqui para download do Visual Studio Code](https://code.visualstudio.com/download)
 - > Algum navegador da sua preferencia, para visualização da página. Neste projeto, foi usado o Google Chrome.
  - > [Clique aqui para download do Google Chrome](https://www.google.com/intl/pt-BR/chrome/)

### Desenvolvimento

Depois de termos instalado os softwares, será necessário clonar o projeto do GitHub para um diretório a sua escolha.
```shell
cd "diretorio de sua preferencia"
git clone https://github.com/lucaszit/testeHibrido
```

### Abrindo o Servidor Local

Após ter o projeto baixado em um diretório da sua escolha, precisamos abrir o XAMPP, que já instalamos, e clicar em Start Apache e MySQL.

### Colocando o projeto no LocalHost

Com o Apache e o MySQL rodando, podemos entrar na pasta de instalação do XAMPP (C:\xampp\htdocs) e dentro da pasta htdocs precisamos
colar o projeto baixado do GitHub.

### Entrando em phpmyadmin

Após termos colocado os arquivos do projeto na pasta htdocs do XAMPP, precisamos entrar no Navegador. Vamos digitar na barra de 
endereços o seguinte comando: localhost/phpmyadmin 
Com isso, entraremos na página do phpmyadmin para podermos importar o banco de dados do projeto.

### Importando o Banco de dados

Agora que já estamos na página do phpmyadmin, vamos importar o banco de dados que está dentro da pasta do projeto, que foi colocado na
pasta do XAMPP (C:\xampp\htdocs\testHibrido). Dentro desta pasta, temos uma pasta chamada data_base. Entrando nela, podemos
encontrar o arquivo cadastro.sql
Agora, vamos voltar no phpmyadmin que abrimos anteriormente e clicar em Importar. Onde diz "Ficheiro a importar" vamos clicar em
Escolher Arquivo, aqui vamos na pasta (C:\xampp\htdocs\testHibrido\data_base) e clicamos no arquivo cadastro.sql
Feito isso, clicamos em Executar, no final da página de importação que estamos, no phpmyadmin.

### Abrindo o projeto no navegador

Pronto, agora temos tudo que precisamos para abrir o projeto em nosso navegador e visualizar o que foi feito.
Para fazermos isto, vamos entrar no navegador e digitar na barra de endereços (localhost/testHibrido/printset.html)
Lembrando que tudo isso é feito com o XAMPP aberto executando o Apache e o MySQL.

### O foco do Projeto

A primeira página tem alguns elementos de Frontend, que era a ideia inicial fazer a cópia do site (https://www.printset.com.br/).
Mas depois de alguns dias trabalhando em cima do Frontend resolvi pegar a parte do Backend para fazer. E foi ai que resolvi focar.
O foco do projeto então, é a parte de Backend, ou seja, a tarefa 2 de criação de um sistema de cadastro de clientes. 
Para visualizarmos isto no site, basta clicar na palavra ENTRAR, que está ao lado do Botão MEUS PEDIDOS, no Header da página. 

### Arquiteturas e Bibliotecas usadas

Neste projeto, não foi utilizado nenhuma arquitetura ou bibliotecas de terceiros. 
