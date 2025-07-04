---


# PASSO A PASSO - INSTALAÇÃO E EXECUÇÃO DO PROJETO RESERVA-SALAS (CodeIgniter 4)

## REQUISITOS:
- PHP 8.x  
- Composer  
- MySQL (pode ser via XAMPP)  
- Navegador Web (Chrome, Firefox, etc.)

---

## 1) VERIFICAR PHP E COMPOSER INSTALADOS

```bash
php -v
composer --version
````

Se não estiverem instalados:

* PHP: [https://windows.php.net/download/](https://windows.php.net/download/)
* Composer: [https://getcomposer.org/download/](https://getcomposer.org/download/)
* MySQL (XAMPP): [https://www.apachefriends.org/pt\_br/index.html](https://www.apachefriends.org/pt_br/index.html)

---

## 2) NAVEGAR ATÉ A PASTA DO PROJETO

```bash
cd caminho/ate/reserva-salas
```

**Exemplo Windows:**

```bash
cd C:\xampp\htdocs\reserva-salas
```

**Exemplo Linux:**

```bash
cd /caminho/para/reserva-salas
```

---

## 3) CONFIGURAR O ARQUIVO `.env`

Copiar o arquivo de exemplo:

**No Windows:**

```bash
copy env .env
```

**No Linux/Mac:**

```bash
cp env .env
```

Depois, editar o `.env` e configurar o banco de dados:

```dotenv
database.default.hostname = localhost
database.default.database = reserva_salas
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
```

---

## 4) INSTALAR DEPENDÊNCIAS VIA COMPOSER

```bash
composer install
```

---

## 5) INSTALAR DOMPDF (CASO NECESSÁRIO)

```bash
composer require dompdf/dompdf
composer dump-autoload
```

---

## 6) IMPORTAR O BANCO DE DADOS

* Acesse seu administrador de SQL
* Vá em **Importar**
* Escolha o arquivo `.sql` fornecido e execute

 (OPCIONAL/caso não use o arquivo sql) Se quiser usar Migrations:

```bash
php spark migrate
```

---

(OPCIONAL/caso não use o arquivo sql) Se quiser usar os seeders 

```bash
php spark db:seed UserSeeder
php spark db:seed RoomSeeder
php spark db:seed ReservationSeeder
```

> Obs: Verifique os nomes corretos dos seeders em `app/Database/Seeds`.

---

## 7) INICIAR O SERVIDOR INTEGRADO DO CODEIGNITER

```bash
php spark serve
```

Depois, abrir o navegador e acessar:

```
http://localhost:8080
```

---

## ✅ PRONTO! O SISTEMA ESTARÁ FUNCIONANDO!

### Funcionalidades Incluídas no Projeto:

* Login e Registro de Usuários
* Gerenciamento de Salas
* Gerenciamento de Reservas (com Filtros, Ordenação, Exportação CSV/PDF)
* Relatórios Gráficos (Chart.js - Barras e Pizza)
* Histórico de Reservas por Usuário
* Perfil de Usuário
* Página Sobre o Sistema

---

