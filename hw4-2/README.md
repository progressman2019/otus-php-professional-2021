[Otus. PHP Developer. Professional 2021](https://otus.ru/lessons/razrabotchik-php/?int_source=courses_catalog&int_term=programming)
==============================

## Домашнее задание №4.2

#### Создать консольный чат на сокетах.

Создать логику, размещаемую в двух php-контейнерах (server и client), объединённых общим volume. Скрипты запускаются в режиме прослушивания STDIN и обмениваются друг с другом вводимыми сообщениями через unix-сокеты.

<br>

>Критерии оценки:
>- Строка в примере - только пример. На тестах она должна быть любой;
>- Соответствие скобок должно быть и с точки зрения скобок. Тест ")(" не должен проходить
>- Конструкции @ и die неприемлемы. Вместо них используйте исключения;
>- С точки зрения логики веб-сервиса ответ 400 - это валидное завершение работы скрипта;
>- В рамках одной машины (без сетевого соединения) сборка LNMP гораздо быстрее работает при соединении FPM и Nginx через socket. Плюс за использование именно такой настройки;
>- Принимается только Unix-сокет;
>- Код здесь и далее мы пишем с применением ООП;
>- Код здесь и далее должен быть конфигурируем через файлы настроек типа config.ini;
>- Обратите внимание на паттерн FrontController (он же - единая точка доступа). Все приложения, которые Вы создаёте здесь и далее должны вызываться через один файл index.php;
>- Точка входа - app.php;
>- Сервер и клиент запускаются командами: php app.php server и php app.php client;
>- Логика чтения конфигураций и работы с сокетами - только в классах;