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
