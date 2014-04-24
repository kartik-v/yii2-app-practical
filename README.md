Yii 2 Practical Application Template
====================================

Yii 2 Practical Application Template is a skeleton Yii 2 application based on the 
[yii2-advanced template](https://github.com/yiisoft/yii2-app-advanced/) best for 
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application. The template allows a **practical** method to directly 
access the frontend from the app root.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

Why yii2-practical?
-------------------

After installing a `app`, in the yii2-advanced application you normally would access the
frontend by:

```
http://domain/app/frontend/web
```

However, in many **practical** scenarios (especially on single domain hosts) one 
would want their users to directly access frontend as:

```
http://domain/app
```

The `yii2-app-practical` enables you to achieve just that by carefully moving and rearranging the 
bootstrap files and web components of frontend to work directly out of the app root. The 
`frontend/web` is entirely eliminated and one can directly access the application frontend
this way:

```
http://domain/app
```

All other aspects of the advanced app remain the same. The `common`, `backend` and `console` will remain as is.
The frontend config, assets, models, controllers, views, widgets and components, will still reside within 
the `frontend` directory. It is just the web access that is moved out to app root.

DIRECTORY STRUCTURE
-------------------

```
ROOT
    /                   contains the frontend entry script and Web resources
common
	config/				contains shared configurations
	mail/				contains view files for e-mails
	models/				contains model classes used in both backend and frontend
	tests/				contains various tests for objects that are common among applications
console
	config/				contains console configurations
	controllers/		contains console controllers (commands)
	migrations/			contains database migrations
	models/				contains console-specific model classes
	runtime/			contains files generated during runtime
	tests/				contains various tests for the console application
backend
	assets/				contains application assets such as JavaScript and CSS
	config/				contains backend configurations
	controllers/		contains Web controller classes
	models/				contains backend-specific model classes
	runtime/			contains files generated during runtime
	tests/				contains various tests for the backend application
	views/				contains view files for the Web application
	web/				contains the entry script and Web resources
frontend
	assets/				contains application assets such as JavaScript and CSS
	config/				contains frontend configurations
	controllers/		contains Web controller classes
	models/				contains frontend-specific model classes
	runtime/			contains files generated during runtime
	tests/				contains various tests for the frontend application
	views/				contains view files for the Web application
vendor/					contains dependent 3rd-party packages
environments/			contains environment-based overrides
```


REQUIREMENTS
------------

The minimum requirement by this application template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

### Install from an Archive File

Extract the archive file downloaded from [GitHub](https://github.com/kartik-v/yii2-app-practical) to
a directory named `practical` that is directly under the Web root.

Then follow the instructions given in "GETTING STARTED".


### Install via Composer

The preferred way to install this extension is through [composer](http://getcomposer.org/download/). 
If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install the application using the following command:

~~~
php composer.phar create-project --prefer-dist --stability=dev kartik-v/yii2-app-practical practical
~~~


GETTING STARTED
---------------

After you install the application, you have to conduct the following steps to initialize
the installed application. You only need to do these once for all.

1. Run command `init` to initialize the application with a specific environment.
2. Create a new database and adjust the `components['db']` configuration in `common/config/main-local.php` accordingly.
3. Apply migrations with console command `yii migrate`. This will create tables needed for the application to work.
4. Set document roots of your Web server:

- for frontend `/path/to/yii-application/` and using the URL `http://frontend/`
- for backend `/path/to/yii-application/backend/web/` and using the URL `http://backend/`

To login into the application, you need to first sign up, with any of your email address, username and password.
Then, you can login into the application with same email address and password at any time.

TESTING
-------

Install additional composer packages:
* `php composer.phar require --dev "codeception/codeception: 1.8.*@dev" "codeception/specify: *" "codeception/verify: *"`

This application boilerplate use database in testing, so you should create three databases that are used in tests:
* `yii2_practical_unit` - database for unit tests;
* `yii2_practical_functional` - database for functional tests;
* `yii2_practical_acceptance` - database for acceptance tests.

To make your database up to date, you can run in needed test folder `yii migrate`, for example
if you are starting from `frontend` tests then you should run `yii migrate` in each suite folder `acceptance`, `functional`, `unit`
it will upgrade your database to the last state according migrations.

To be able to run acceptance tests you need a running webserver. For this you can use the php builtin server and run it in the directory where your main project folder is located. For example if your application is located in `/www/practical` all you need to is:
`cd /www` and then `php -S 127.0.0.1:8080` because the default configuration of acceptance tests expects the url of the application to be `/practical/`.
If you already have a server configured or your application is not located in a folder called `practical`, you may need to adjust the `TEST_ENTRY_URL` in `frontend/tests/_bootstrap.php` and `backend/tests/_bootstrap.php`.

After that is done you should be able to run your tests, for example to run `frontend` tests do:

* `cd frontend`
* `../vendor/bin/codecept build`
* `../vendor/bin/codecept run`

In similar way you can run tests for other application tiers - `backend`, `console`, `common`.

You also can adjust you application suite configs and `_bootstrap.php` settings to use other urls and files, as it is can be done in `yii2-basic`.
