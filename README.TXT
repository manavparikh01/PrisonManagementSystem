Please use Google Chrome or firefox browser for this.

You will need to download XAMPP from their website on the following link: https://www.apachefriends.org/download.html
You will also need to have PHP, phpMyAdmin, MySQL and Apache downloaded.
To download phpMyAdmin, please use the following link: https://www.phpmyadmin.net/downloads/

As a Mac user, you will already have PHP, MySQL and Apache downloaded so you will need to start these. Open terminal and type "sudo apachectl start" and press enter.
To start MySQL, go to system preferences, MySQL, and start MySQL server.

For other users, you will need to download it from their websites.
Now download the file and copy and paste the prison file into the following directory: XAMPP/htdocs. Note: copy the prison folder into htdocs

Open XAMPP, you will need to configure the control panel. You will need to start Apache and MySQL in particular. Make sure they are green.

Download the files from github and rename is to PrisonManagement

To start  check everything is working by typing
http://127.0.0.1 . This should lead to a page showing XAMPP.
Now type into your browser:
http://127.0.0.1/phpMyAdmin/
you will need to click "new" on the side and where it says database name, write "authenticate"
At the top where it says import, you will need to import the file called authenticate.sql and press go. You should see the table "users" on the side under authenticate.
Click on "new" again and this time call it prison.
Repeat the steps and import prison.sql this time.
You should see "prisoners" , "workers" and "Cases " underneath prison now.
Both sql files are saved in the PrisonManagement folder you have downloaded.

You're all set up now
Go to this link:

http://127.0.0.1/PrisonManagement/signUp.php
and you can start using the application.

 Anytime you want to go back to the database: http://127.0.0.1/phpMyAdmin/
 For the login page: http://127.0.0.1/PrisonManagement/login.php

Please note that the app was designed with safari originally therefore any issues without layout, please zoom out of the page and it will fix it.
