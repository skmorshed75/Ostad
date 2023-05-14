<!-- 
MODULE - 13
Submitted by : Sheikh Mohammed Morshed
Date : 14/05/2023

ASSIGNMENT :
------------
Laravel Installation and Folder Structure Assignment

Part 1: Laravel Installation
----------------------------
Install the latest version of Laravel using either Composer or the Laravel installer. Document the steps you took to install Laravel.

SOLUTION PART 1 :
----------
Using Composer
--------------
- Install Composer : https://getcomposer.org

Laravel Installer
-----------------
- Using Command Line Tool : composer global require laravel/installer
- Create a new Laravel Project : laravel new demoProject
- Navigate the project directory : cd demoProject
- Start Server : php artisan serve

Verify that Laravel is installed and working correctly by creating a new Laravel project and running the development server. Take a screenshot of the running server.
- Create a new Laravel Project : composer create-project laravel/laravel demoProject
- Navigate the project directory : cd demoProject
- Start Server : php artisan serve

Part 2: Laravel Folder Structure
---------------------------------
Describe the purpose of each of the following folders in a Laravel project:
- app
- bootstrap
- config
- database
- public
- resources
- routes
- storage
- tests
- Vendor

SOLUTION PART 2 : 
----------------
    app: The app directory contains the core application code. It includes the models, controllers, middleware, and other classes that form the backbone of the Laravel application.

    bootstrap: The bootstrap directory contains files that are responsible for bootstrapping the Laravel framework itself. It includes the app.php file, which initializes the application, as well as other files for environment configuration and error handling.

    config: The config directory holds various configuration files for the Laravel application. It includes files for database connections, application settings, service providers, mail settings, caching options, and more. Developers can modify these files to customize the behavior of the application.

    database: The database directory contains files related to database management. It includes database migrations, which are used to create and modify database tables, as well as seeders, which are used to populate the database with sample data. The factories directory within database contains factory classes used for generating dummy data during testing or development.

    public: The public directory is the document root of the Laravel application. It contains the entry point (index.php) for the application and serves as the public-facing directory. Assets like CSS, JavaScript, images, and uploaded files are typically stored here. It is the only directory accessible to the web server.

    resources: The resources directory houses non-PHP resources used by the application. It includes views (Blade templates), language files, Sass or CSS stylesheets, JavaScript files, and other assets. Laravel compiles these resources and moves them to the public directory for serving.

    routes: The routes directory contains all the route definitions for the application. It includes the web.php file for defining web routes and the api.php file for defining API routes. Additional route files can be created to organize routes for specific features or areas of the application.

    storage: The storage directory stores various files generated by the application, such as logs, cached files, session files, and uploaded files. It is further divided into subdirectories like app, framework, and logs to organize the different types of files.

    tests: The tests directory holds the test cases for the application. It includes both unit tests and feature tests that verify the functionality and behavior of the code. The directory structure usually mirrors the structure of the app directory to group tests by corresponding components.

    vendor: The vendor directory contains the dependencies installed via Composer. It includes all the libraries and packages required by the Laravel application. This directory is managed by Composer and should not be modified manually.


Create a new route in your Laravel project that displays a simple "Hello, World!" message. Take a screenshot of the running route.
------------------------------------------------------------------------------------------
Route::get('/', function () {
    return "Hello, World!";
});

What you should Submit :
    Submit your github repository link.
    In this repository create a document containing the screenshots from Part 1 and 

Part 2, along with a description of the steps you took to complete the assignment.