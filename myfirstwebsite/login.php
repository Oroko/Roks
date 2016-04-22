<!Doctype html>
<html>
  <head>
    <title>Login page</title>
  </head>
  <body>
    <a href="index.php">Go back Home</a><br/><br/>
      <form action="checklogin.php" method="POST">
        Enter Username: <input type="text" name="username" required="required" /> <br/>
        Enter password: <input type="password" name="password" required="required" /> </br>
        <input type="submit" value="Login"/>
      </form>
  </body>
</html>
