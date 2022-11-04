# laravel-rest-api
This project shows how you can implement a REST API that calls an external API service to get information about books. Additionally, it shows how you will implement a simple CRUD (Create, Read, Update, Delete) API with MySQL local database.

# Laravel Xampp Setup (Windows & Mac)
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

## Create a New Laravel Project With Composer

Open a terminal in the htdocs folder. htdocs is where all of your local projects go.

htdocs folder location:
- **Windows** - C:\Xampp\htdocs
- **Mac** - /opt/lampp/htdocs

```
composer create-project --prefer-dist laravel/laravel laravel-rest-api
```
Go to the project directory using the following command
```
cd C:\Xampp\htdocs\laravel-rest-api
```
Use the following command to run laravel project and confirm everything works fine
```
php artisan serve
```
You should see the following message on the terminal
```
   INFO  Server running on [http://127.0.0.1:8000].

   Press Ctrl+C to stop the server
``` 
Now visit http://127.0.0.1:8000 on your browser and confirm you see the laravel homepage.

## Database Setup

