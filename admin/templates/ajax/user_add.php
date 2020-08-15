<?php

    //echo "Done Done ";

    require_once "../../../config.php";                 //back three folder from user_add.php
    require_once "../../../vendor/autoload.php";        //back three folder from user_add.php

    use Edu\Board\Controller\User;

   // print_r($_POST);

    $user = new User;

    $data = $user -> createUser($_POST);             //access from user_add.php page to Auth.php page

    echo $data;



//    use Edu\Board\Support\Auth;
//
//    $auth = new Auth;
//
//    $auth ->amni();             //access from user_add.php page to Auth.php page
//
//    echo $name = $_POST['name'];
//    echo $email = $_POST['email'];
//    echo $cell = $_POST['cell'];
//    echo $uname = $_POST['uname'];
//    echo $role = $_POST['role'];
//
//    print_r($_POST);

?>