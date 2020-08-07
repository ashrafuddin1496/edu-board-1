<?php
    namespace Edu\Board\Support; //at first declaration for namespace
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

     return  $this -> connection = new PDO("mysql:host =". $this -> host."; dbname=" . $this -> db, $this -> user,  $this -> pass);
    }


    /**
     * Data Check
     */

    public function dataCheck($tbl, $data){

         //  echo 'tumi okay';       //From Auth Class upto dataCheck class we can reach or not . We are checking this way.

         $stmt = $this -> connection() -> prepare("SELECT * FROM $tbl WHERE email = '$data' || uname = '$data' ");

         $stmt -> execute();

          $num = $stmt -> rowCount();                // rowCount() is used for PDO Connection      //num_rows is used in mysql for existing row
                                                     //echo 'Number of Row Count Data: '.$num;
          return [
             'num' => $num,                          //column number
             'data' => $stmt                         //all data for a single user
         ];

    }



}


?>