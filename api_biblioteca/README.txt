API de Biblioteca Virtual com Livros e Autores em PHP Puro
INTEGRANTES DO GRUPO:
Luana Garcia
Lucas Bardella
Murilo Gama
Paulo Augusto
Raphaela Luvizotto

Requisitos:
- PHP 7+
Endpoints disponíveis:
1. LIVROS:
GET - /api_biblioteca/livros.php
GET PELO ID - /api_biblioteca/livros.php?id=ID
POST - /api_biblioteca/livros.php
PUT - /api_biblioteca/livros.php
DELETE - /api_biblioteca/livros.php?id=ID

2. AUTORES:
GET - /api_biblioteca/autores.php
GET PELO ID - /api_biblioteca/autores.php?id=ID
POST - /api_biblioteca/autores.php
PUT - /api_biblioteca/autores.php
DELETE - /api_biblioteca/autores.php?id=ID

Formato JSON para criar livro:
{
"id": 1,
"autor_id": 1,
"isbn": 9786556404721,
"titulo": "Dom Casmurro",
"ano_publicacao": 1899,
"genero": "Romance",
"editora": "Nova Fronteira"
}

Formato JSON para criar autor:
{
"id": 1,
"nome": "Machado de Assis",
"nacionalidade": "Brasileiro",
"nascimento": "21-06-1839"
}