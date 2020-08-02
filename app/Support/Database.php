<?php
namespace Edu\Board\Support;
require_once "../../config.php";
use PDO;

/**
 * Database Managements
 */

abstract class Database{

    /**
     * Server Information
     */

    private  $host = HOST;
    private  $user = USER;
    private  $pass = PASS;
    private  $db = DB;
    private  $connection;

    /**
     * Database Connection
     */

    private function connection(){
       //PDO Connection

        $connection = new PDO("mysql:host =". $this -> host."; db_name=" . $this -> db, $this -> user,  $this -> pass);
    }


}


?>