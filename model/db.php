<?php
class db{
    public $con;
    public function __construct($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME)
    {
        $this -> con = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS);
        mysqli_select_db($this -> con,$DB_NAME);
    }
    public function proses ($sql) {
        return mysqli_query($this -> con, $sql);
    }
}

?>    