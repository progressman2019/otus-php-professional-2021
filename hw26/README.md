[Otus. PHP Developer. Professional 2021](https://otus.ru/lessons/razrabotchik-php/?int_source=courses_catalog&int_term=programming)
==============================

## Домашнее задание №26

#### Разработать приложение обработки отложенных запросов.

Мы научимся строить асинхронное приложение на практике. 
Задача состоит в том, чтобы научиться применять очередь, увидеть её преимущества и недостатки.  

Пишем приложение обработки отложенных запросов. 

1. Создать простое веб-приложение, принимающее POST запрос из формы от пользователя. Например, запрос на генерацию банковской выписки за указанные даты;
2. Обычно такие запросы (в реальных системах) работают довольно долго, поэтому пользователя надо оповестить о том, что запрос принят в обработку;
3. Форма должна подразумевать отправку оповещения по результатам работы;
4. Передать тело запроса в очередь;
5. Написать скрипт, который будет читать сообщения из очереди и выводить информацию о них в консоль;
6. Реализация оповещения. Сгенерированный ответ отправить через email или telegram;
7. Приложить инструкцию по запуску системы;