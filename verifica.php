<?php
$connection=mysqli_connect(localhost, root, hbechelli, noticias);
if (mysqli_connect_errno())
{
echo "Erro no MySQL: " . mysqli_connect_error();
}
$sql = "CREATE TABLE usuarios 
(
id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome varchar(20) NOT NULL default '',
login varchar(20) NOT NULL default '',
senha varchar(20) NOT NULL default '',
postar enum('S', 'N') NOT NULL default 'S'
)";
 
if (mysqli_query($connection,$sql))
{
echo "Tabela aut_usuarios criada com sucesso";
}
else
{
echo "Erro ao criar a tabela: " . mysqli_error($connection);
}
?>
<?php 
// Verificador de sessão 
require "verifica.php"; 

// Verifica se usuário tem permissão para postar notícia 
if($_SESSION["permissao"] !== "S") 
{ 
echo "Você não tem permissão para postar notícias!"; 
exit; 
} 

// Se o script continuar aqui, é que o usuário tem permissão 
// Então.. seu formulário de postagem abaixo 
?>


<?php 
// Inicia sessões 
session_start(); 

// Verifica se existe os dados da sessão de login 
if(!isset($_SESSION["id_usuario"]) || !isset($_SESSION["nome_usuario"])) 
{ 
// Usuário não logado! Redireciona para a página de login 
header("Location: login.html"); 
exit; 
} 
?> 