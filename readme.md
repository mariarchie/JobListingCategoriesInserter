# Job Listing Categories Inserter

Данный скрипт предназначен для добавления категорий к пользовательскому типу записи (Custom Post Type) в WordPress.

## Описание

Скрипт обрабатывает массив категорий, представленных в иерархическом виде, и добавляет их в WordPress, сохраняя указанную иерархию.

## Использование

1. Добавьте код в вашу тему или плагин WordPress.
2. Вызовите функцию `insert_job_listing_categories` с вашим массивом категорий:

```php
$listing_categories = ['главная', 'главная->дочерняя', 'главная->дочерняя2'];
insert_job_listing_categories($listing_categories);
