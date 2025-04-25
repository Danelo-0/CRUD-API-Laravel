В данном проекте реализован REST API для CRUD продуктов и категорий. Созданы две таблицы (product и product_categories) со связью один-ко-многим, в таблице product_categories рекурсивная связь с собой. Прописаны seeders и factories к таблицам. Создано два контроллера для работы c API. Добавлен эндпоинт для выдачи категорий с продуктами. Вывод ответа на запрос в виде дерева.

Laravel Framework: 12.10.1
PHP: 8.3
PostgreSQL: 16
Веб-окружение: Open Server Panel 6.0.0

Laravel project installation

1. git clone

2. composer install

3. Copy file ".env.example" and replace the name with ".env"

4. In the project console, type the command "php artisan key:generate"