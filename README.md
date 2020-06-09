<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

# Instalação

## Pacotes

Pacotes do Composer PHP

```
composer install
```

Pacotes do Node.JS

```
npm install && npm run dev
```

## Migration

Bando de dados **MySQL**

```
php artisan migrate
```

Gere os registros do banco de dados para teste

```
php artisan db:seed --class=PacienteSeeder
```

# API REST

GET | http://127.0.0.1:8000/api/paciente

GET | http://127.0.0.1:8000/api/paciente/3

POST | http://127.0.0.1:8000/api/paciente/?cpf=888888888&nome=Agente X&rg=43123123&cartao_sus=123123123&sexo=masculino&nascimento=2000-05-12&nome_mae=Nome mae teste&telefone=234234234&cep=23423423&rua=34&numero=12312&quadra=123123&lote=12312&complemento=123&bairro=123&cidade=123&uf=SP

PUT | http://127.0.0.1:8000/api/paciente/2?cpf=04312919186&nome=Alessandro&rg=2020202020&cartao_sus=123123123&sexo=masculino&nascimento=2000-05-12&nome_mae=Maria Silva&telefone=234234234&cep=23423423&rua=34&numero=12312&quadra=123123&lote=12312&complemento=123&bairro=123&cidade=123&uf=SP

DELETE | http://127.0.0.1:8000/api/paciente/2