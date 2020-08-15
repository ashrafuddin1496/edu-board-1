<?php

    //echo "Done Done ";

    require_once "../../../config.php";                 //back three folder from user_add.php
    require_once "../../../vendor/autoload.php";        //back three folder from user_add.php

    use Edu\Board\Controller\User;

    $user = new User;

    $data = $user -> allUser( );             //access from user_all.php page to Auth.php page

    //print_r($data -> fetchAll());

    $all_data = $data ->fetchAll();

    $i = 1;

    foreach ($all_data as $val) :


?>

        <tr>
            <td><?php echo $i; $i++; ?></td>
            <td><?php echo $val['name']; ?></td>
            <td><?php echo $val['email']; ?></td>
            <td><?php echo $val['cell']; ?></td>
            <td><?php echo $val['uname']; ?></td>
            <td><img style="width: 50px; height: 50px" src="images/<?php echo $val['photo'];  ?>" alt=""></td>
            <td><?php echo $val['status']; ?></td>
            <td>
                <a class="btn btn-sm btn-info" href="#">View</a>
                <a class="btn btn-sm btn-warning" href="#">Edit</a>
                <a class="btn btn-sm btn-danger" href="#">Delete</a>
            </td>
        </tr>

<?php
endforeach;
?>
