# Biblioteca Digital - Teste PSW1

**Aluno:** Francisco Monteiro  
**Número:** a22405043  
**Data:** 19 de janeiro de 2026

## Instalação

1. Clonar/Extrair projeto
2. `composer install`
3. Copiar `.env.example` para `.env`
4. Configurar BD no `.env`:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=biblioteca_a22405043
   DB_USERNAME=root
   DB_PASSWORD=sua_password
   ```
5. `php artisan key:generate`
6. Criar a base de dados:
   ```sql
   CREATE DATABASE biblioteca_a22405043;
   ```
7. `php artisan migrate`
8. `php artisan db:seed` (opcional - popula com dados de teste)
9. `php artisan serve`

## Acesso

- **URL Books:** http://localhost:8000/books
- **URL Categories:** http://localhost:8000/categories
- **URL Principal:** http://localhost:8000 (redireciona welcome page , opções (aceder a livro ou a categoria)

## Funcionalidades Implementadas

- [x] Configuração inicial
- [x] Migrations (categories, books, loans)
- [x] Models e relações (Category, Book, Loan)
- [x] CRUD Books completo (index, create, store, show, edit, update, destroy)
- [x] CRUD Categories completo (index, create, store, edit, update, destroy)
- [x] Validação server-side em todos os formulários
- [x] Interface moderna e responsiva com Tailwind CSS
- [x] Seeders (BÓNUS - CategorySeeder, UserSeeder, BookSeeder)

## Credenciais de Teste (Seeders)

Se executou `php artisan db:seed`, foram criados:

### Utilizadores:
- João Silva: `joao@teste.com` / `password123`
- Maria Santos: `maria@teste.com` / `password123`
- Pedro Costa: `pedro@teste.com` / `password123`

### Categorias:
- Romance
- Ficção Científica
- História
- Tecnologia
- Infantil

### Livros (6 livros de exemplo):
- O Apanhador no Campo de Centeio
- 1984
- Sapiens: História Breve da Humanidade
- Clean Code
- O Pequeno Príncipe
- O Hobbit

FranciscoMonteiro_a22405043_teste
├── app/
│   ├── Http/Controllers/
│   │   ├── BookController.php
│   │   └── CategoryController.php
│   └── Models/
│       ├── Book.php
│       ├── Category.php
│       ├── Loan.php
│       └── User.php
├── database/
│   ├── migrations/
│   │   ├── xxxx_create_categories_table.php
│   │   ├── xxxx_create_books_table.php
│   │   └── xxxx_create_loans_table.php
│   └── seeders/
│       ├── CategorySeeder.php
│       ├── UserSeeder.php
│       ├── BookSeeder.php
│       └── DatabaseSeeder.php
├── resources/views/
│   ├── layouts/
│   │   └── app.blade.php
│   ├── books/
│   │   ├── index.blade.php
│   │   ├── create.blade.php
│   │   ├── edit.blade.php
│   │   └── show.blade.php
│   └── categories/
│       ├── index.blade.php
│       ├── create.blade.php
│       └── edit.blade.php
└── routes/
    └── web.php
```

## Tecnologias Utilizadas

- **Laravel 11** - Framework PHP
- **MySQL** - Base de dados
- **Tailwind CSS** - Framework CSS (via CDN)
- **Font Awesome** - Ícones (via CDN)
- **Blade** - Template engine



### Como funciona a proteção?

O Laravel gera um **token único** para cada sessão do utilizador. Quando enviamos um formulário, incluímos esse token:

```blade
@csrf
```

Isto gera um campo oculto:
```html
<input type="hidden" name="_token" value="token_aleatorio_aqui">
```

O Laravel **valida** que o token enviado é o mesmo da sessão. Se não for, **rejeita o pedido**! 

**Exemplo prático:** Se alguém tentar enviar um formulário malicioso do teu site, não terá o token correto e o Laravel bloqueia!

Todos os nossos formulários (create e edit) têm `@csrf` para proteção! 🔒

## Validações Implementadas

### Books:
- ISBN: obrigatório, único, exatamente 13 dígitos
- Título: obrigatório, máximo 255 caracteres
- Autor: obrigatório
- Categoria: obrigatória, deve existir em categories
- Ano de Publicação: opcional, numérico, entre 1500 e ano atual
- Disponível: boolean

### Categories:
- Nome: obrigatório, único, máximo 100 caracteres
- Descrição: opcional

## Problemas Conhecidos

Nenhum problema conhecido. O sistema está 100% funcional.

## Screenshots

O sistema possui uma interface moderna com:
- Gradientes coloridos
- Tabelas responsivas
- Formulários estilizados
- Mensagens de sucesso/erro
- Ícones Font Awesome
- Design limpo e profissional

---

**Desenvolvido por Francisco Monteiro (a22405043) - PSW1 2025/2026**
