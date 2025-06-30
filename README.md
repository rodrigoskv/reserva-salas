PASSO A PASSO - INSTALAÇÃO E EXECUÇÃO DO PROJETO RESERVA-SALAS (CodeIgniter 4)

REQUISITOS:
- PHP 8.x
- Composer
- MySQL (pode ser via XAMPP)
- Navegador Web (Chrome, Firefox, etc.)

=====================================
1) VERIFICAR PHP E COMPOSER INSTALADOS
=====================================
php -v
composer --version

Se não estiverem instalados:
- PHP: https://windows.php.net/download/
- Composer: https://getcomposer.org/download/
- MySQL (XAMPP): https://www.apachefriends.org/pt_br/index.html

=====================================
2) NAVEGAR ATÉ A PASTA DO PROJETO
=====================================
cd caminho/ate/reserva-salas

Exemplo Windows:
cd C:\xampp\htdocs\reserva-salas

Exemplo Linux:
cd /caminho/para/reserva-salas

=====================================
3) CONFIGURAR O ARQUIVO .ENV
=====================================
Copiar o arquivo de exemplo:

No Windows:
copy env .env

No Linux/Mac:
cp env .env

Depois, editar o .env e configurar o banco de dados:

database.default.hostname = localhost
database.default.database = reserva_salas
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi

=====================================
4) INSTALAR DEPENDÊNCIAS VIA COMPOSER
=====================================
composer install

=====================================
5) INSTALAR DOMPDF (CASO NECESSÁRIO)
=====================================
composer require dompdf/dompdf
composer dump-autoload

=====================================
6) CRIAR O BANCO DE DADOS
=====================================
Acesse o phpMyAdmin ou o terminal do MySQL e execute:

CREATE DATABASE reserva_salas;

=====================================
7) IMPORTAR O BANCO DE DADOS
=====================================
Se o projeto tiver um arquivo .sql:

- Acesse o phpMyAdmin
- Selecione o banco "reserva_salas"
- Vá em Importar
- Escolha o arquivo .sql fornecido e execute

=====================================
8) INICIAR O SERVIDOR INTEGRADO DO CODEIGNITER
=====================================
php spark serve

Depois, abrir o navegador e acessar:

http://localhost:8080

=====================================
10) TESTES DE PDF OU OUTROS (OPCIONAL)
=====================================
Se precisar criar controller de exportação PDF:

php spark make:controller PdfExport

=====================================
PRONTO! O SISTEMA ESTARÁ FUNCIONANDO!

Funcionalidades Incluídas no Projeto:
- Login e Registro de Usuários
- Gerenciamento de Salas
- Gerenciamento de Reservas (com Filtros, Ordenação, Exportação CSV/PDF)
- Relatórios Gráficos (Chart.js - Barras e Pizza)
- Histórico de Reservas por Usuário
- Perfil de Usuário
- Página Sobre o Sistema
