Symfony Demo Application
========================

We use official "Symfony Demo Application" to demonstrate basics of Codeception functional tests. Check out `tests` directory to see functional and unit tests included. We use [Symfony2](http://codeception.com/docs/modules/Symfony2) and [Doctrine2](http://codeception.com/docs/modules/Doctrine2) modules for zero-configuration Symfony testing.

## Run Codeception Tests
First run PHP server:
```
cd public
php -S 127.0.0.1:8000
```

Then run tests:
```
composer install -n
php bin/console doctrine:fixtures:load -n --env test
php vendor/bin/codecept run
```

Below goes official README of Symfony Demo Application:

---

The "Symfony Demo Application" is a reference application created to show how
to develop Symfony applications following the recommended best practices.

Requirements
------------

  * PHP 7.1.3 or higher;
  * PDO-SQLite PHP extension enabled;
  * and the [usual Symfony application requirements][1].

Installation
------------

Execute this command to install the project:

```bash
$ composer create-project symfony/symfony-demo
```

[![Deploy](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy)

Usage
-----

There's no need to configure anything to run the application. Just execute this
command to run the built-in web server and access the application in your
browser at <http://localhost:8000>:

```bash
$ cd symfony-demo/
$ php bin/console server:run
```

Alternatively, you can [configure a fully-featured web server][2] like Nginx
or Apache to run the application.

Tests
-----

Execute this command to run tests:

```bash
$ cd symfony-demo/
$ ./vendor/bin/simple-phpunit
```

[1]: https://symfony.com/doc/current/reference/requirements.html
[2]: https://symfony.com/doc/current/cookbook/configuration/web_server_configuration.html
