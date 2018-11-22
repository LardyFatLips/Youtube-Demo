# Youtube-Demo

Why?
----------------

A sample project demonstrating a basic setup of an application which searches for youtube videos, saves them to a database and fires an event into kafka.


Requirements
----------------

PHP 7.0 >= , Composer and MySQL need to be installed on the machine.

Librdkafka and php-rdkafka must also be installed. See links below

https://github.com/arnaud-lb/php-rdkafka

https://github.com/edenhill/librdkafka

An instance of Kafka needs to be running with the topic 

```bash
video-saved
```

created and being consumed

Installing
----------------

Git clone the repository


```bash
git clone https://github.com/LardyFatLips/Youtube-Demo.git
```

Ensure that mysql is running and accessible

Create a mysql database called 


```bash
youtube 
```

and a table titled 

```bash
videos
```

Create columns

```bash

primary key auto incrementing id, 

url (varchar 255), 

title (varchar 255) 

description (varchar 255)

```

cd to the project root and run composer install

```bash
composer install
```


Update config.php with db details, api key and kafka broker details

cd to public and php serve

```bash
php -S localhost:8885
```

Have fun saving youtube videos and kafka broadcasting your interests...