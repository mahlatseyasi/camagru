CAMAGRU

An app that allows you .

Requirements

HTML and CSS knowledge
PHP and JavaScript skills
XAMP : https://www.apachefriends.org/index.html

Installation

How to download the source code
Navigate to https://github.com/mahlatseyasi/camagru, click on clone or download

How to set up and configure the database
Download XAMMP as part of the requirement list
Run the XAMMP control panel and start the required services.

How to run the program
extract the camagru directory and place in htdocs
navigate to http://localhost/camagru/setup/ and run click setup.php 

Code Breakdown
Backend and Frontend technologies
JavaScript
PHP
HTML
CSS

Database management systems
mysql
phpmyadmin

Break down of app


This contains the structure of the nav bar which is consistent throughout application.

Handles the websites block functionality. User is able to block and unblock a specific user. Ensures that a blocked user is not able to view your profile or send you a chat.
chatr.js
Handles the chat functionality. Ensures that a user is only able to chat with another user if they have both liked each other.
confirm.js
Validates the confirmation code a user receives via email when creating an account, ensures the user has confirmes their email adress before accessing the website.
custom.js
Handles the back end functionality of the recommended matches based on a users predifned sexuality, preferences, interests (tags) and geo location.
login.js
Handles user login by cross checking a users email and password.
signup.js
Handles user signup by taking
notifications.js
helpers
helper.js
Custom code for certain conditions that alter the views.
config
db.js
Handles the databse connection
Testing
