<?php
include_once("resources/views/crud_user/config.php");

class Db {
    public static $conn;
    public function __construct(){
        if (!isset(self::$conn)) {
            # code...
            self::$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT, DB_CONNECTION);
            self::$conn->set_charset(DB_CHARSET);
        }
    }
}
?>
