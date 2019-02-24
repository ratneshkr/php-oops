<?php

class DBOperation {

    private $conn = null;

    function connectDB() {
        $this->conn = mysqli_connect('localhost', 'root', '', 'testdb', '3306');
        if (!$this->conn) {
            die('Could not connect to MySQL: ' . mysqli_connect_error());
        }
    }

    function save($name, $address, $gender) {
        $sql = "INSERT INTO `user` (`name`, `address`, `gender`) VALUES ('$name', '$address', '$gender');";
        if (mysqli_query($this->conn, $sql)) {
            echo 'Saved';
        }
    }

    function disconnectDB() {
        mysqli_close($this->conn);
    }

}
