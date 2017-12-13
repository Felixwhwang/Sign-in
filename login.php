<?php  
session_start();//session starts here  
  
?>  
  

<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
    <title>Login</title>  
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
                                                              <h3 class="panel-title">Sign In<a class="menu" href="http://automatedquiz.com/signin/registration.php">Visitor</a><a class="menu" href="http://automatedquiz.com/signin/admin_login.php">Admin</a></h3>
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="login.php">  
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                            </div>  
  
  
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >  
  
                            <!-- Change this to a button or input when using this as a form -->  
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->  
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
  
if(isset($_POST['login']))  
{  
    $user_email=$_POST['email'];  
    $user_pass=$_POST['pass'];  
  
    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";  
  
    $run=mysqli_query($dbcon,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('welcome.php','_self')</script>";  
  
        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?>