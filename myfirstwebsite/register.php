
<html>
  <head>
    <title>Registration page</title>
  </head>
  <body>
    <a href="index.php">Go back Home</a><br/><br/>
      <form action="register.php" method="POST">
        Enter Username: <input type="text" name="username" required="required" /> <br/>
        Enter password: <input type="password" name="password" required="required" /> </br>
        <input type="submit" value="Register"/>
      </form>
  </body>

</html>

<?php
       if($_SERVER["REQUEST_METHOD"] == "POST"){
          $username = $_REQUEST['username'];
          $password = $_REQUEST['password'];


          $bool= true;
          //connect to Server
          mysql_connect('localhost','root','') or die(mysql_error());

          //connect to database
          mysql_select_db('abe_db') or die("Cannot Connect to Database");

          //query the users Table
          $query= mysql_query("Select * from users");

          //Display all rows from the table users
          while($row = mysql_fetch_array($query)){
            $table_users = $row['username']; // the first username is passed on to $table_users, and so on until the query
            if(username == $table_users)//checks if there are any matching fields
            {
              $bool = false; //sets bool to false
              print '<script>alert("Username has been taken!");</script>'; // prompts the users
              print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
            }
          }

          if($bool == true) // checks if bool is true
            {
              mysql_query("insert into users (username, password) values ('$username','$password')"); // inserts the values to table users
              print'<script>alert("Successfully Registered!");</script>'; // prompt the users
              print'<script>window.location.assign("register.php");</script>'; // redirects to register.php
            }
          }



?>
