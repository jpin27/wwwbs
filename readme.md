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
WWWBS requires Laravel, Composer, and [npm] to run, as well as an AMP server: [Apache], MySQL, and PHP.

Install [Composer](https://getcomposer.org/download/) (There's a Windows installer to make your life easier). `cd` into the directory where you `git clone`d the WWWBS repo, then install Laravel (we're making a global install just so it's more awesome):

```bash
$ composer global require "laravel/installer"
```
Verify that you have everything installed:

```bash
$ php -V
$ composer --version
$ laravel --version
```

You only have to do the steps above once, and you're all set to code!

### During development 
Compile the Vue.js and Laravel dependencies...

```bash
$ cd wwwbs
$ npm install
$ composer install
```
Authenticate your session, then start the development server! Make sure you have the .env file in the `wwwbs` folder (for security, our .env file is not tracked by version control)

```bash
$ php artisan key:generate
$ php artisan serve
```

Keep the `php artisan serve` window open, and type http://127.0.0.1:8000 on your favourite browser (which is Chrome). Boom. Wacky.

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
