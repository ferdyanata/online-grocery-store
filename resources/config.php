<?php

/* @author Ferdy Anata
 * Created on: 21/04/2018
 * Description: config.php consists information that is used on every page of this project. This allows us to use these settings throughout  a project because if something changes such as
 * database credentials, or path to a specific resource, we'll only need to update it here.
 */

$server = "rerun.it.uts.edu.au";
$username = "potiro";
$password = "pcXZb(kL";
$dbName = "poti";

$connection = mysqli_connect($server, $username, $password, $dbName);
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
} else {
    // The print below needs to be removed upon final project phase. This is only temporary to make sure that database is running.
    print "MySQL successfully connected";
}
?>
<br>