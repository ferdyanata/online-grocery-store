<?php
class DBController {
    private $server = "rerun.it.uts.edu.au";
    private $username = "potiro";
    private $password = "pcXZb(kL";
    private $dbName = "poti";
    private $conn;

    function __construct() {
        $this->conn = $this->connectDB();
    }

    function connectDB() {
        $conn = mysqli_connect($this->server, $this->username, $this->password, $this->dbName);
        return $conn;
    }

    function runQuery($query) {
        $result =  mysqli_query($this->conn, $query);

        return mysqli_fetch_assoc($result);
    }

    function numRows($query) {
        $result = mysqli_query($this->conn, $query);
        return mysqli_num_rows($result);
    }
}

?>