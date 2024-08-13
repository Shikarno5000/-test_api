# test_api
1 Переименование 
2 докеризация https://www.dev-notes.ru/articles/devops/dockerize-a-laravel-11-app/
    2.1 первичная докеризация
        2.1.1  подключение базы на бегет
    2.2 Формирование первого тестового варианта
    2.3.1 перенос на хостинг


Вопросы: 
Храниние файлов. Где будет происходить при смене докера
База данных
    обновление базы данных проверить


Подключение к базе данных на бегете
    Нужно открыть доступ по ip



база данных для теста
voeeek.beget.tech 
voeeek_testbeg
%wuIRE7i
пароль для ронних подключений nHN0Zqj%



Нужно разделить тестовую базу и рабочую


mysql -h voeeek.beget.tech -u voeeek_testbeg -p

Stop all the containers

sudo docker stop $(sudo docker ps -a -q)

Remove all the containers

docker rm $(docker ps -a -q)



Заметки:
 запуск команд в конкретном контейнере docker exec -t laravelapp php artisan migrate