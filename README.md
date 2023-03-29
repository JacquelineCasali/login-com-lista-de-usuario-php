# Projeto de Sistema de login

# como rodar o projeto

clone o repositório completo : git clone https://github.com/JacquelineCasali/login-php.git

# Requisitos

PHP
composer

# Instalação

npm install
instalar as depedências:
composer install

# Rodar projeto

criar a base de dados 'user' no servidor MySQL
php artisan serve

Alterar as credenciais do banco de dados no arquivo ".env":
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=login
DB_USERNAME=root
DB_PASSWORD=

Executa as migration: php artisan migrate

Rodar o projeto criado com Laravel:php artisan serve

Acessar o navegador no enderço que apareçe no terminal

# Imagem do Projeto
Tela de login
<br>
<br>
![2023-03-29_140526](https://user-images.githubusercontent.com/103325619/228616147-bbd6414e-cb08-48c2-9a17-269675872b50.png)

Tela de cadastro
<br>
<br>
![2023-03-29_140701](https://user-images.githubusercontent.com/103325619/228616242-deb6a50f-818f-4b6f-b854-fb63e1cc7cfd.png)

Tela de lista de usuário
<br>
<br>
![2023-03-29_140950](https://user-images.githubusercontent.com/103325619/228616369-dfc222e5-c2b2-4fe1-860d-f9c817b208f9.png)
