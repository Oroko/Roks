<html>
  <head>
    <title>My First PHP website</title>
  </head>
  <?php
    session_start(); // starts the session
    if($_SESSION['user']){//checks if user is logged in

    }
    else{
      header("location:index.php"); //reirects if user is not logged in
    }
    $user= $_SESSION['user']; //assigns user values

  ?>
  <body>
    <h2>Home Page</h2>
    <p>Hello <?php print "$user"?>!</p> <!--Displays user's name-->
    <a href="logout.php">Click here to logout</a><br/><br/>
    <form action ="add.php" method = "POST">
      Add more to list: <input type="text" name="details"/><br/>
      public post? <input type="checkbox" name="public[]" value="yes"/><br/>
      <input type= "submit" value="Add to list"/>
    </form>
    <h2 align="center">My List</h2>
    <table border = "1px" width="100%">
      <tr>
        <td>ID</td>
        <td>Details</td>
        <td>Post Time</td>
        <td>Edit Time</td>
        <td>Edit</td>
        <td>Delete</td>
        <td>Public Post</td>
      </tr>
      <?php
        mysql_connect("localhost","root","") or die(mysql_error());
        mysql_select_db("abe_db") or die("Could not connect");
        $query = mysql_query("select id, details, date_posted, time_posted, date_edited, time_edited, public from list");
        while($row=mysql_fetch_array($query)){
          print "<tr>" ;
            print '<td align="center">' . $row['id']. '</td>';
            print '<td align="center">' . $row['details']. '</td>';
            print '<td align="center">'  . $row['date_posted'] .'-'. $row['time_posted']. '</td>';
            print '<td align="center">'  . $row['date_edited'] .'-'. $row['time_edited']. '</td>';
            print '<td align="center"><a href="edit.php">edit</a> </td>';
            print '<td align="center"><a href="delete.php">delete</a> </td>';
            print '<td align="center">' . $row['public']. '</td>';

          print "</tr>";

        }
      ?>
    </table>
  </body>
</html>
