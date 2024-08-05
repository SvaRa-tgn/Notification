Разворачивание проекта

docker compose build - билдим проект
docker compose up -d запускаем контейнеры
composer install

Настраиваем .env
php artisan key:generate

Для ДБ добавляем:
DB_CONNECTION=pgsql
DB_HOST=db
DB_PORT=5432
DB_DATABASE=service
DB_USERNAME=service
DB_PASSWORD=service
POSTGRES_PORT=5442

для RabbitMQ: QUEUE_CONNECTION=rabbitmq

Если не подключается БД опускаем контейнеры - docker compose down
в папке .docker/postgres удаляем папки data и test-data
Заново поднимаем контейнеры.

Эндпоинты можно пробить через Postman

GET http://localhost:8010/api/v1/notification
Получаем все уведомления в БД

POST http://localhost:8010/api/v1/notification
Добавляем уведомление в базу напрямую (Rabbit не испольуется)
Вводим:
sender - email отправителя
recipient - email получателя
text - сообщение
Запрос возвращает статус и json с данными уведомления

POST http://localhost:8010/api/v1/send-rabbit
Добавляет уведомление в БД отправляя сообщение через Rabbit
Обязательно нужно запустить команду php artisan recive 
Команда нужна для принятия комсумером сообщения.
Вводим:
sender - email отправителя
recipient - email получателя
text - сообщение

POST http://localhost:8010/api/v1/notification/rabbit
Добавляет уведомление в базу создавая очередь в Rabbit
Обязательно нужно запустить команду php artisan queue:work 
Команда нужна для обрабодки очереди
Вводим:
sender - email отправителя
recipient - email получателя
text - сообщение
Запрос возвращает статус и json сообщение об успешной операции

Если нет соединения с Rabbit меняйте в коде Host:rabbimq на localhost
