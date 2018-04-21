<?php

/* @author Ferdy Anata
 * Created: 21/04/2018
 * Description: config.php consists information that is used on every page of this project. This allows us to use these settings throughout  a project because if something changes such as
 * database credentials, or path to a specific resource, we'll only need to update it here.
 */

$server = "rerun";
$username = "potiro";
$password = "pcXZb(kL";
$dbName = "poti";

$connection = mysqli_connect($server, $username, $password, $dbName);
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
    die("Database selection failed: " . mysqli_error($connection));
} else {
    // The print below needs to be removed upon final project phase. This is only temporary to make sure that database is running.
    print "MySQL successfully connected\n\n";
}

$query_string = "select * from products";
 
$result=mysqli_query($connection,$query_string);
$num_rows=mysqli_num_rows($result);

echo "Displaying the results using associative array";

// mysql_fetch_assoc: This function will return a row as an associative array where the column names will be the keys storing corresponding value.
if ($num_rows > 0 ) {
    print "<table border='0'>";
     while ( $a_row = mysqli_fetch_assoc($result) ) {
         print "<tr>\n";
         foreach ($a_row as $field)
             print "\t<td>{$field}</td>\n"; 
         print "</tr>";
    }
    print "</table>";
}
 
mysqli_close($connection);    

?>