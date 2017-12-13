<?php  
session_start();//session starts here  
  
?> 

<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
    <title>Admin Login</title>  
</head>  
<style>  
.login-panel {  
        margin-top: 150px;
}
         
.btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.active, .open > .dropdown-toggle.btn-success {
    color: #fff;
    background-color: #56449d;
    border-color: #3b3984;
}
    
.btn-success {
    color: #fff;
    background-color: #5c74b8;
    border-color: #4c58ae;
}

.panel-success > .panel-heading {
    color: #3c4376;
    background-color: #5c74b8;
    border-color: #5c74b8;
}

body {
    background: url("http://automatedquiz.com/quizstorm/wp-content/uploads/2017/11/Rough-Grey-Tilable-Pattern-For-Website-Background.jpg");
}

.panel {
    margin-bottom: 20px;
    border: 0px solid transparent;
    border-radius: 4px;
    background: none repeat scroll 0% 0% rgba(0, 0, 0, 0.5);
    box-shadow: 0px 0px 13px 3px rgba(0, 0, 0, 0.5);
}

.menu {
    margin-left: 30px;
    text-decoration: none;
}

.menu:hover {
    color: #56449d;
    text-decoration: none;
}  
</style>  
  
<body>  
  
<div class="container">  
    <div class="row">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Admin<a class="menu" href="http://automatedquiz.com/signin/login.php">Sign In</a><a class="menu" href="http://automatedquiz.com/signin/registration.php">Vistor</a></h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="admin_login.php">  
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="Name" name="admin_name" type="text" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="admin_pass" type="password" value="">  
                            </div>  
  
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="admin_login" >  
  
  
                        </fieldset>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
  
</body>  
  
</html>  
  
<?php  
include("db_connection.php");
  
if(isset($_POST['admin_login']))//this will tell us what to do if some data has been post through form with button.  
{  
    $admin_name=$_POST['admin_name'];  
    $admin_pass=$_POST['admin_pass'];  
  
    $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";  
  
    $run_query=mysqli_query($dbcon,$admin_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
  
        echo "<script>window.open('view_users.php','_self')</script>"; 
        $_SESSION['admin_name']=$admin_name; 
    }  
    else {echo"<script>alert('Admin Details are incorrect..!')</script>";}  
  
}  
  
?>