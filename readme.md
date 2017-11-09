# Wacky Waving Wellness Booking System


Wacky Waving Wellness Booking System (WWWBS) is Saskatchewan's first online booking system for a medical clinic, to be tested and deployed at the University of Saskatchewan's Student Wellness Centre. 

  - Sign in with your PAWS account
  - Click on an appointment timeslot, or select your favourite practitioner to view their schedule
  - Magic

# Features!

  - Students will be able to book an appointment online
  - A nifty, nice-to-look-at Timetable view that offers at-a-glance access to all available and occupied appointments


### Tech

WWWBS uses the following technologies and open source projects to work properly:

* [Vue.js] - HTML enhanced for web apps!
* [Bootstrap] - great UI boilerplate for modern web apps
* [Laravel] - the coolest PHP framework ever
* [Composer] - dependency manager for Laravel
* [Gulp] - the streaming build system
* [Sass] - a stable professional-grade CSS extension language
* [MySQL] - for database access
* [PHP] - duh

# Installation

### Development environment 
WWWBS requires Laravel, Composer, and [npm] to run, as well as an AMP server: [Apache], MySQL, and PHP.

Install [Composer](https://getcomposer.org/download/) (There's a Windows installer to make your life easier). `cd` into the directory where you `git clone`d the WWWBS repo, then go to the `frameworkplayground` branch (someday we'll merge this to the master branch once we know what we're doing):
```bash
$ git checkout frameworkplayground
```
Then install Laravel (we're making a global install just so it's more awesome):
```bash
$ composer global require "laravel/installer"
```
Verify that you have everything installed:
```bash
$ php -V
$ composer --version
$ laravel --version
```
Compile the Vue.js and Laravel and dependencies...
```bash
$ cd wwwbs
$ npm install
$ composer install
```
Authenticate your session, then start the development server!
```bash
$ php artisan key:generate
$ php artisan serve
```

Keep the `php artisan serve` window open, and type http://127.0.0.1:8000 on your favourite browser (which is Chrome). Boom. Wacky.

### Testing environment

Our project is run by TDD. Lots of it. Our code for testing is still under development, but our testing environment with PHPUnit, so go ahead and do that:

```bash
$ phpunit
```

### Todos

 - Write MORE Tests
 - Get Milestone 5 done

### The Dev Team

We're a pretty cool bunch. We like coding and party parrots. We are Group 17, and our group name is Wacky Waving Inflatable Flailing Arm Tube Men (after a while, you get used to it).

[Abeghe] • [Ahmed] • [Crooks] • [Elmoselhi] • [Hibatullah] • [Hussain] • [Pineda] • [Ponugoti]


License
----

MIT

**Free Software, Hell Yeah!**

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)


   [MySQL]: <https://www.mysql.com/>
   [Vue.js]: <https://vuejs.org/>
   [Bootstrap]: <http://getbootstrap.com/>
   [Laravel]: <https://laravel.com/>
   [Composer]: <https://getcomposer.org/download/>
   [PHP]: <http://www.php.net/>
   [Gulp]: <https://gulpjs.com/>
   [Sass]: <http://sass-lang.com/>
   [npm]: <https://www.npmjs.com/get-npm>
   [Apache]: <https://httpd.apache.org/download.cgi>

   [Abeghe]: <mailto:cta072@mail.usask.ca>
   [Ahmed]: <mailto:taa632@mail.usask.ca>
   [Crooks]: <mailto:bbc712@mail.usask.ca>
   [Elmoselhi]: <mailto:the644@mail.usask.ca>
   [Hussain]: <mailto:fah235@mail.usask.ca>
   [Hibatullah]: <mailto:hih050@mail.usask.ca>
   [Pineda]: <mailto:jay.p@usask.ca>
   [Ponugoti]: <mailto:vip670@mail.usask.ca>
