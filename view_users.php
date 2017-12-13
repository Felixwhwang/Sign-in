<?php  
session_start();  
  
if(!$_SESSION['admin_name'])  
{  
  
    header("Location: admin_login.php");
}  
  
?>

<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->  
    <title>View Users</title>  
</head>  
<style>  
.login-panel {  
        margin-top: 150px;  
} 
     
.table {  
        margin-top: 50px;  
  
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
    background: url("https://user-images.githubusercontent.com/31264160/33872095-4923e750-deca-11e7-94b2-16a6ef444ecb.png");
}

.panel {
    margin-bottom: 20px;
    border: 0px solid transparent;
    border-radius: 4px;
    background: none repeat scroll 0% 0% rgba(0, 0, 0, 0.5);
    box-shadow: 0px 0px 13px 3px rgba(0, 0, 0, 0.5);
}

.table-bordered {
    border: 0px solid #ddd;
}



.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
    padding: 5px;
    line-height: 1.429;
}

.table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td {
    border: 0px solid #ddd;
}

.table {
    width: 1200px;
}
</style>  
  
<body>  
<div style="float: right;"><a href="admin_logout.php"><button class="btn btn-danger">Logout</button></a></div>  
<div class="table-scrol">  
    <h1 align="center">All the Users</h1>
<div align="center">
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
      
        <thead>  
  
        <tr>    
            <th>Name</th>  
            <th>Password</th>  
            <th>E-mail</th>  
            <th>Telephone</th> 
            <th>Company</th>
            <th>Official Visit</th>
            <th>Escort Name</th>
            <th>Delete User</th> 
        </tr>  
        </thead>  
  	
        <?php  
	include("db_connection.php");
	
        $view_users_query="select * from users";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {    
            $user_id=$row[0];
            $user_name=$row[1];  
            $user_email=$row[2];  
            $user_pass=$row[3];
            $user_telephone=$row[4];
            $user_company=$row[5];
            $official_visit=$row[6];
            $escort_name=$row[7];  
  
  
  
        ?>  
  
        <tr>  
	<!--here showing results in the table -->   
            <td><?php echo $user_name;  ?></td>  
            <td><?php echo $user_email;  ?></td>  
            <td><?php echo $user_pass;  ?></td>  
            <td><?php echo $user_telephone;  ?></td> 
            <td><?php echo $user_company;  ?></td> 
            <td><?php echo $official_visit;  ?></td> 
            <td><?php echo $escort_name;  ?></td> 
            <td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
</div>
  
</body>  
  
</html>