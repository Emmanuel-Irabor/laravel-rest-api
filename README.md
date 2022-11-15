<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.


# Project: Books API
This project shows how you can implement a REST API that calls an external API service to get information about books. Additionally, it shows how you will implement a simple CRUD (Create, Read, Update, Delete) API with MySQL local database.

## Xampp Setup (Windows & Mac)
For this project we would be making use of xampp. XAMPP is a free and open-source cross-platform web server solution stack package developed by Apache Friends, consisting mainly of the Apache HTTP Server, MariaDB database, and interpreters for scripts written in the PHP and Perl programming languages.

## Install Xampp
Install Xampp from https://www.apachefriends.org/index.html

- Run the Xampp installer and open the Xampp control panel
- Make sure that you enable the Apache and MySQL services
- On mac you need to click "Start" on the Home tab, "Enable" on the Network tab and "Mount" on the Location Tab. Click "Explore" on the location tab to open your Xampp/Lampp folder

## Install Composer
Go to https://getcomposer.org/download

- On Windows, download and run the installer
- On Mac, copy the php commands from the Composer download page and run in the terminal. Then copy the mv command and run in terminal. You can also install composer with Homebrew

## Testing the Project
- Clone the repository
- Run "composer install"
- Setup the database using the steps in the "Database Setup" section below;

Note: Ensure you conclude the steps in the database setup before carrying out the following steps!

- Go to the project directory via the command line/terminal
- Use the following command to run laravel project and confirm everything works fine
```
php artisan serve
```
You should see the following message on the terminal
```
   INFO  Server running on [http://127.0.0.1:8000].

   Press Ctrl+C to stop the server
``` 
- Now visit http://127.0.0.1:8000 on your browser and confirm you can see the laravel homepage.
- Go ahead to test the project on Postman.


## Postman Collection
https://documenter.getpostman.com/view/23777914/2s8YYLL2rq

## Database Setup
Since we are making use of XAMPP, we would use the MySQL database installed with xampp.
- Open the xampp control panel, ensure that mysql is running as a service and on port 3306
- Open XAMPP shell and type the following command to login to mysql server. (Note: we are able to login without a password because the password is empty by default. You can change the password later)
```
mysql -u root
```
- At this point you should be logged in to MySQL server. Now type the following SQL query to Create estate_intel database and press enter
```
CREATE DATABASE estate_intel;
```
- Type the following SQL query to see the database that was just created
```
SHOW DATABASES;
```
- Edit the .env file in your project directory and replace the DATABASE CONFIGURATION with the following
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=estate_intel
DB_USERNAME=root
DB_PASSWORD=
```
- Go terminal and navigate to project directory then type the following command to make migrations
```
php artisan migrate
```
- Now go back to XAMPP shell and execute the following SQL query to see that the books table was properly created.
```
USE estate_intel;
SHOW TABLES;
```
- You should see the following;
```
+------------------------+
| Tables_in_estate_intel |
+------------------------+
| books                  |
| failed_jobs            |
| migrations             |
| password_resets        |
| personal_access_tokens |
| users                  |
+------------------------+
```
- Now we are all setup!

## Running tests
One of the most important things about tests is obviously running them since you can create as many as you want, but you can’t test anything if it doesn’t work.

Laravel makes it very easy for us to run our tests through the terminal. Keep in mind that you can only perform tests from the root of your project directory. You can run your tests by performing one of the following commands:
```
php artisan test
```
- Ensure you have created at least 2 records in the database before running the test
- You should see the result as shown in the image below;
- For simplicity, we are checking the status if all API endpoints are working properly and return successful responses.
![image](https://user-images.githubusercontent.com/75018175/200349023-eb8c9f48-d532-4093-88b7-21ce2b3cfc01.png)
