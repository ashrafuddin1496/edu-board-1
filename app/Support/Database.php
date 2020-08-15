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
     * Data create
     */
     public function crate(){

     }

    /**
     * Find data by id
     */
    public function find($id){

    }


    /**
     * Delete data by id
     */

    public function delete($id){

    }

    /**
     * Data show all
     */

    public function all($tbl){

    }


    /**
     * Existing Data Check in database for username or email
     */

    public function dataCheck($tbl, array $data, $condition = 'AND'){

        $query_string = '';

        foreach ($data as $key => $val){
              //echo $key;
          $query_string .= $key . "='$val' $condition ";

        }

        $query_string;

        $query_array = explode(' ', $query_string);
        array_pop($query_array);
        array_pop($query_array);

        $final_query_string =  implode(' ', $query_array);  //echo $final_query_string;

        $stmt = $this -> connection() -> prepare("SELECT * FROM $tbl WHERE $final_query_string ");

        $stmt -> execute();

       echo $num = $stmt -> rowCount();

       return [
           'num' => $num,
           'data' => $stmt,
        ];

    }


        //Update method
        public function update($tbl,$id, array $data){
            $query_string = '';
            foreach ($data as $key => $val){

                $query_string .= "$key = '$val' , ";
            }

        // echo $query_string;

        $query_array = explode(' ', $query_string);
        array_pop($query_array);
        array_pop($query_array);

        $final_query_string =  implode(' ', $query_array);

        // echo $final_query_string;

         $stmt = $this->connection() -> prepare("UPDATE $tbl SET $final_query_string WHERE id ='$id' ");
         $stmt -> execute();

        }




}


?>