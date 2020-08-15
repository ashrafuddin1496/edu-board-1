<?php
    namespace Edu\Board\Support;       //at first declaration for namespace
    use Edu\Board\Support\Database;
    use PDO;

    /**
     * Auth Managements
     */

     class Auth extends Database {

         /**
          * Login Management System
          */
         public function userLonginSystem($email_uname, $pass){

             $data = $this->emailUsernameCheck($email_uname);                               // echo 'Email and Password : '.$email_uname . $pass;   // we can access from method to capture the value. test purpose only .     // checking existing value in database for uname = muhsina or email = muhsina.akter2@gmail.com

             $user_num = $data['num'];                                                     // echo 'Number of Rows Data : '.$user_num;

             $login_user_data = $data['data'] -> fetch(PDO::FETCH_ASSOC);                  //fetch() means by default fetch_array() but we want to get FETCH_ASSOC OR FETCH_OBJECT from PDO Class

             echo $login_user_data['name'];

             if($user_num == 1){

              if(password_verify($pass,$login_user_data['pass'])){

                  $_SESSION['id'] = $login_user_data['id'];
                  $_SESSION['pass'] = $login_user_data['pass'];
                  $_SESSION['role'] = $login_user_data['role'];
                  $_SESSION['name'] = $login_user_data['name'];
                  $_SESSION['uname'] = $login_user_data['uname'];
                  $_SESSION['email'] = $login_user_data['email'];
                  $_SESSION['cell']  = $login_user_data['cell'];
                  $_SESSION['photo'] = $login_user_data['photo'];

                  header('location:dashboard.php');
                  // echo 'Success Fully Longin';

              }else{
                  return "<p class=\"alert alert-danger \">Wrong Password ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
              }

             }else{

                 return "<p class=\"alert alert-danger \">Email or Username is incorrect ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";

             }

             //  echo "<pre>";
             //  print_r($login_user_data);                                      echo $login_user_data['name'];
             //  echo "</pre>";


             // In this case we have to use fetch(PDO :: FETCH_ASSOC) or fetch(PDO::FETCH_OBJ)

             // echo $data['data'] ->fetch();   For PDO Connection we will use fetch() in single data and fetchAll() in multiple data  and  For mysql fetch_arary(), fetch_assoc(), fetch_object()

         }


         /**
          * Username
          * Reusable Purpose emailUsernameCheck only
          */

          public function  emailUsernameCheck($email_uname){

             return $this -> dataCheck('users', [
                 'email' => $email_uname,
                 'uname' => $email_uname,

             ], 'OR');         // here users is table name . dataCheck() method is used for checking existing value yes or no in database for uname = muhsina or email = muhsina.akter2@gmail.com

         }

          /**
           * Logout System
           */

          public function userLogout(){
              session_destroy();
              header("location:index.php");
          }



     }





?>