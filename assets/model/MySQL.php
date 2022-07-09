<!--
    Project: Hash Arts
    Version: 1.0
    Author: CEIL Software Solutions
    Website: http://www.ceilsoftwaresolutions.ml/
    Contact: ceilsoftwaresolutions2022@gmail.com 
-->

<?php

// MySQL Connector Class
class MySQL
{
    public static $connection;

    private static function create_connection()
    {
        if (!isset(MySQL::$connection)) {
            MySQL::$connection = new mysqli("127.0.0.1", "root", "", "3306");
        }
    }

    public static function iud($query)
    {
        MySQL::create_connection();
        MySQL::$connection->query($query);
    }

    public static function search($query)
    {
        MySQL::create_connection();
        $result_set = MySQL::$connection->query($query);
        return $result_set;
    }
}
