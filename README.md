# Programa-o-Para-Internet---INFO4M
descrevendo o código do sistema de login que são no total 5 arquivos:

Conexao.php:
Arquivo que será responsável por fazer a conexão do banco de dados com o php, a partir das  variáveis, $host, $root, $senha, $database, que se der errado, exibe a mensagem "Não deu certo fazer a conexo", e se der certo a conexão, o arquivo index ira funcionar o envio dos dados ao banco.

Index.php: Arquivo principal que será responsável pelo funcionamento do formulário de login, quando a conexão estiver estabelecida, onde os dados cadastrados forem iguais ao que se digita no formulario de login, o usuario acessa sua conta, e se não forem iguais, irá exibir falha ao logar.

Logout.php: Arquivo que tem como funcionalidade fazer com que o usuário saia da pagina principal e volte para a pagina de login ocorrendo a partir do comando session_destroy(), que quebra a sessão do painel.

Painel.php: Arquivo referente a pagina principal quando o login funciona e o usuário acessa sua conta no site.

protect.php: Arquivo que serve para impedir que o usuário acesse a pagina principal sem ter feito o login ainda, ocorrendo pelo comando if(!isset($_SESSION['id'])), que impede o acesso sem login.

