# Estate Intel Back End Engineering Assessment
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
