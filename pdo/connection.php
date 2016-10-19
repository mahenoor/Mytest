<?php
class Connection
{
    public static function make($config)
    {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=today', 'root', '');
            echo "connected";
        }
        catch (PDOexception $e) {
            die($e->getMessage());
        }
    }
}
?>