# Wacky Waving Wellness Booking System

The Wacky Waving Wellness Booking System (WWWBS) is a CRUD-based appointment booking system created in Laravel, originally intended to be tested and deployed at the University of Saskatchewan's Student Wellness Centre. 

  - Sign in with a registered account
  - Click on an appointment timeslot, or select your favourite practitioner to view their schedule
  - Magic

# Features!

  - Users will be able to book an appointment online
  - A nifty, nice-to-look-at Timetable view that offers at-a-glance access to all available and occupied appointments per doctor


### Tech

WWWBS uses the following technologies and open source projects to work properly:

* [Vue.js] - HTML enhanced for web apps!
* [Twitter Bootstrap] - great UI boilerplate for modern web apps
* [Laravel] - the coolest PHP framework ever
* [Sass] - basically, CSS with superpowers. a stable professional-grade CSS extension language
* [Composer] - dependency manager for Laravel
* [Gulp] - the streaming build system
* [MySQL] - for database access
* [PHP] - of course

# Installation

### Development environment 
WWWBS requires [Composer] and [npm] to run, as well as an AMP server: [Apache], [MySQL], and [PHP]. [Laravel] is also required but it is already bundled with the Composer buildfile.

### During development 
Compile the Vue.js and Laravel dependencies...

```bash
$ cd wwwbs
$ npm install
$ composer install
```

Verify that you have everything installed.
As of June 28, 2019, the current versions are the ones listed below:

```bash
$ php -v
PHP 7.3.6 (cli) (built: May 29 2019 12:11:00) ( ZTS MSVC15 (Visual C++ 2017) x64 )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.3.6, Copyright (c) 1998-2018 Zend Technologies
$ composer --version
Composer version 1.8.6 2019-06-11 15:03:05
$ php artisan --version
Laravel Framework 5.5.22
```

Authenticate your session, then start the development server! Make sure you have the .env file in the `wwwbs` folder (for security, our .env file is not tracked by version control)

```bash
$ php artisan key:generate
$ php artisan serve
```

Keep the `php artisan serve` window open, and type http://127.0.0.1:8000 on your favourite browser. Boom. Wacky.

### Testing environment

This project is powered by TDD. The code for testing is still under development, but I'll update this space with instructions on how to do testing when I'm done.

### Todos

 - Write MORE Tests
 - Make controllers for the models
 - Party hard
 - Integrate CI/CD and a proper PHPUnit test suite (maybe with Gulp)

### The Dev Team

This web app was originally designed to fulfill academic coursework requirements. Currently, I am the only developer left who is still working on maintaining the system. I believe maintaining this code is good practice for my Laravel and full-stack dev skills. 


License
----

MIT

**Free Software, Hell Yeah!**

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)


   [MySQL]: <https://www.mysql.com/>
   [Vue.js]: <https://vuejs.org/>
   [Twitter Bootstrap]: <http://getbootstrap.com/>
   [Laravel]: <https://laravel.com/>
   [Composer]: <https://getcomposer.org/download/>
   [PHP]: <http://www.php.net/>
   [Gulp]: <https://gulpjs.com/>
   [Sass]: <http://sass-lang.com/>
   [npm]: <https://www.npmjs.com/get-npm>
   [Apache]: <https://httpd.apache.org/download.cgi>
