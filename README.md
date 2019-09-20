# Тестовый Mini-Blog

Простой блог с сущностями статей и комментариев.

Параметры для подключения к удаленной базе данных (в конструкторе класса "components\MysqliConnector.php")

Сервер для подключения сайтов:
localhost

Для запуска на локальном сервере с собственной базой:
1. Создать базу данных 'test_blog' и пользователя 'test' без паролем в MySQL
2. Сделать импорт таблиц из дампа(файла в корне репозитория) test_blog.sql в созданную базу
3. В "components\App.php" в конструкторе класса прописать параметры подключения к БД

При удачном подключении к базе данных на сервере с проектом станут доступными:
- Публикация статей и комментариев к ним не авторизованным гостям
- Вывод самых комментируемых записей в слайдер на главную страницу.

Доступные url:
domen_name/
domen_name/blog/publication/54
