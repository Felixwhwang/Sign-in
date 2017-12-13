<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <link rel="stylesheet" type="text/css" href="sign.css" />
    <title>Registration</title>  
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
  
<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->  
    <div class="row"><!-- row class is used for grid system in Bootstrap-->  
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                                          <h3 class="panel-title">Visitor<a class="menu" href="http://automatedquiz.com/signin/admin_login.php">Admin</a><a class="menu" href="http://automatedquiz.com/signin/login.php">Sign In</a></h3> 
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="registration.php">  
                        <fieldset>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Name" name="name" type="text" autofocus>  
                            </div>  
  
                            <div class="form-group">  
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Telephone" name="telephone" type="text" value="">  
                            </div>                          
                             <div class="form-group">  
                                <input class="form-control" placeholder="Company" name="company" type="text" value="">  
                            </div>  
                            <div class="form-group">  
                                <input name="visit" type="checkbox" value="Yes">Official Visit<br>
                            </div> 
                            <div class="form-group">
                            	<input type="checkbox" onclick="showBox(this)"/>Escort Name<br>
				<input class="form-control" name="escort" type='text' id='fb' style="display:none"/>
				<script type="text/javascript"> 
				function showBox(elem){
					document.getElementById("fb").style.display=elem.checked?"block":"none";
				}
				</script>                                 
                            </div> 
                              				
  			    <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register">
  				
                        </fieldset>  
                    </form>  
                    <center><b>Already Signed In ?</b></b><a style="text-decoration: none;" href="login.php">Login here</a></center><!--for centered text-->  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
</body>  
  
</html>  

<?php  
  
include("db_connection.php");
if(isset($_POST['register']))  
{  
    $user_name=$_POST['name'];  
    $user_pass=$_POST['pass'];
    $user_email=$_POST['email'];
    $user_telephone=$_POST['telephone'];
    $user_company=$_POST['company'];
    $official_visit=$_POST['visit'];
    $escort_name=$_POST['escort'];
  
  
    if($user_name=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the name')</script>";  
    	exit();//this use if first is not work then other will not show  
    }  
  
    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
    	exit();  
    }  
  
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    	exit();  
    }
    
    if($user_telephone=='')  
    {  
        echo"<script>alert('Please enter the telephone')</script>";  
    	exit();  
    }
    
    if($user_company=='')  
    {  
        echo"<script>alert('Please enter the company')</script>";  
    	exit();  
    }
    
//here query check weather if user already registered so can't register again.  
    $check_email_query="select * from users WHERE user_email='$user_email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
	echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
	exit();  
    }  
//insert the user into the database.  
    $insert_user="insert into users (user_name,user_pass,user_email,user_telephone,user_company,official_visit,escort_name) VALUE ('$user_name','$user_pass','$user_email','$user_telephone','$user_company','$official_visit','$escort_name')";  
    if(mysqli_query($dbcon,$insert_user))  
    {
    	echo"<script>alert('Submit Successfully!')</script>";  
    	exit();
        echo"<script>window.open('registration.php','_self')</script>";
    }  
  
  
  
}  
  
?>  