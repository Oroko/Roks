<?php
  session_start();
  if($_SESSION['user']){

  }
  else{
    header("location:index.php");
  }
  if($_SERVER['REQUEST_METHOD'] == "POST"){

    $details=$_REQUEST['details'];
    $time= strftime("%X"); //time
    $date= strftime("%B %d,%Y");//date
    $decision ="no";
    mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db("abe_db") or die("Could not connect to the database!");

    foreach($_REQUEST['public'] as $each_check)
    {
      if ($each_check != null)
      {
        $decision="yes";
      }
    }
    mysql_query("INSERT INTO list(details,date_posted,time_posted,public) VALUES('$details','$date','$time','$decision')");
    header("location:home.php");
  }
  else{
    header("location:home.php");
  }



?>
