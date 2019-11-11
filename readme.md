Для корректной установки на вашем сервере должны быть установлены PHP 7.1, расширение mcrypt для PHP и Composer. 

Для установки сделайте следующее:

Склонировать проект на локальную машину, войти в папку проекта

git clone https://github.com/zagrebelnaya81/laravel_test.git

cd laravel_test

Установить все зависимости приложения через Composer
composer install

Переименовать.env.exemple в .env
Настроить подключение к MySQL базе данных в файле .env

Создать базу данных приложения, выполнив SQL-запрос в MySQL
CREATE DATABASE `pages` COLLATE 'utf8_general_ci'

Сгенерировать ключ 
php artisan key:generate

Запустить скрипт генерации таблиц БД
php artisan migrate

Заполнить бд с помощью seed 
php artisan db:seed
Добавляет пользователя и статью для него 

Запустить веб-сервер
php artisan serve

Открыть страницу в браузере: http://localhost:8000/
