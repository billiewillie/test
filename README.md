# Тестовое задания Вадима Белиновича

## Создать БД `library`
- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=library
- DB_USERNAME=root
- DB_PASSWORD=

## в первой вкладке консоли
- git clone https://github.com/billiewillie/test.git test
- cd test
- composer install
- cp .env.example .env 
- php artisan migrate --seed
- php artisan key:generate
- php artisan storage:link
- php artisan serve
- открыть в браузере ссылку, которую выдал php artisan serve

## во второй вкладке
- npm install && npm run dev
