## About Sign-in

The `sign-in` application is a simple front-end application that runs on a mobile device, e.g., an iPad or an Android tablet that communicated with a back-end database.  This application is used as a kiosk device to collect information on visitors for a corporation.

## Nonfunctional requirements

### Design
The application should run in a real tablet environment. The backend server should response very fast to client when they finish the form. The interface for client and admin should be comfortable for them and no delay for admin login or client form submition.

### Tools
I am using Mysql database, HTML5 as second tier of structure, css as first tier to beautify frontend and php as third to connect to Mysql database. I am also using bluehost server to depoly this porject on real tablet environment.

### Installation instructions
Anyone who want to use the codes can download EXAMPP from https://www.apachefriends.org/index.html to build an local server environment depend on apache and local Mysql databse.

Then change the db_connection.php file (the default password is none, and username is root):
```
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your-database-name";

$dbcon = new mysqli($servername, $username, $password, $dbname);  
```

When the database created, import the file named sign-in.sql file into database. That is the default data I used. Then running the file named admin_login.php file, all done!

### Architecture discussion
It is three-tier architecture, the first tier using css and bootstrap-3.2.0 to build the frontend, the second tier is using HTML5 to create the basic fram of the application and it is going to connect both frontend and backend which is using PHP to connect the Mysql database.

### Plan of action
- [x] Nonfunctional analysis
- [x] Architecture design
- [x] Client side data submition
- [x] Checking database connected successfully or not
- [x] Build amdin view table to check if admin can receive data from database successfully
- [x] Admin Login function
- [x] Admin session security design
- [x] Client Login function
- [x] Client session security design
- [x] Simple welcome client view page
- [x] Delete function for admin
- [x] Checkbox modification
- [x] Real deployment on bluehost

## Deployment
I have a bluehost server for domain automatedquiz.com. The demo will be available on http://automatedquiz.com/signin/, but only for client registration and login. Here I put admin login view, client information adding view and user table view below.

### User View
![screen shot 2017-12-12 at 1 20 16 am](https://user-images.githubusercontent.com/31264160/33876590-ca8a8960-deda-11e7-923d-d86845111674.png)

### Admin View
![screen shot 2017-12-12 at 1 24 05 am](https://user-images.githubusercontent.com/31264160/33876734-331ea308-dedb-11e7-81cd-457e6c06f911.png)
