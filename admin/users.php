<?php
include_once "templates/header.php";
?>

<?php
    use Edu\Board\Controller\User;

    $usr = new User;
?>


<!-- MAIN CONTENT  -->
<section id="content">
    <section class="hbox stretch">
        <section>
            <section class="vbox">
                <section class="scrollable padder">

                    <section class="row m-b-md">
                        <div class="col-sm-6">
                            <h3 class="m-b-xs text-black">All users</h3> <small>Welcome back, <?php echo $_SESSION['name'];  ?>, <i class="fa fa-map-marker fa-lg text-primary"></i><?php echo $_SESSION['email'];  ?></small>
                        </div>

                            <!-- USERS ADD MODAL  -->
                            <div id="add_user_modal" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <h2>Add new user </h2>
                                            <div class="mess"></div>
                                            <hr>
                                            <form id="add_student_form" action="" method="POST" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="">Name</label>
                                                    <input class="form-control" name="name" type="text">
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Username</label>
                                                    <input class="form-control" name="uname" type="text">
                                                </div>


                                                <div class="form-group">
                                                    <label for="">Email</label>
                                                    <input class="form-control" name="email" type="email">
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Cell</label>
                                                    <input class="form-control" name="cell" type="text">
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Role</label>
                                                      <select class="form-control" name="role" id="" >
                                                          <option value="">- Select - </option>
                                                          <option value="Admin">Admin</option>
                                                          <option value="Teacher">Teacher</option>
                                                          <option value="Staff">Staff</option>

                                                      </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for=""></label>
                                                    <input class="btn btn-primary" name="add" type="submit" value="Add user">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                    </section>


    <div class="row">
        <div class="col-sm-12">
            <a id="add_user_btn" class="btn btn-sm btn-primary" href="#">Add new user</a>
            <br>
            <br>
            <section class="panel panel-default">
                <header class="panel-heading"><span class="label bg-danger pull-right m-t-xs">4 left</span>All users</header>
                 <table class="table table-striped m-b-none">
                     <thead>
                     <tr>
                         <th>#</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Cell</th>
                         <th>Role</th>
                         <th>Photo</th>
                         <th>Status</th>
                         <th>Action</th>
                     </tr>
                     </thead>

                     <tbody>
                     <tr>
                         <td>1</td>
                         <td>Muhsina Akter</td>
                         <td>muhsina.akter2@gmail.com</td>
                         <td>01715022945</td>
                         <td>admin</td>
                         <td><img style="width: 50px; height: 50px" src="images/a4.png" alt=""></td>
                         <td>Active</td>
                         <td>
                             <a class="btn btn-sm btn-info" href="#">View</a>
                             <a class="btn btn-sm btn-warning" href="#">Edit</a>
                             <a class="btn btn-sm btn-danger" href="#">Delete</a>
                         </td>
                     </tr>
                     <tr>
                         <td>1</td>
                         <td>Muhsina Akter</td>
                         <td>muhsina.akter2@gmail.com</td>
                         <td>01715022945</td>
                         <td>admin</td>
                         <td><img style="width: 50px; height: 50px" src="images/a4.png" alt=""></td>
                         <td>Active</td>
                         <td>
                             <a class="btn btn-sm btn-info" href="#">View</a>
                             <a class="btn btn-sm btn-warning" href="#">Edit</a>
                             <a class="btn btn-sm btn-danger" href="#">Delete</a>
                         </td>
                     </tr>
                     <tr>
                         <td>1</td>
                         <td>Muhsina Akter</td>
                         <td>muhsina.akter2@gmail.com</td>
                         <td>01715022945</td>
                         <td>admin</td>
                         <td><img style="width: 50px; height: 50px" src="images/a4.png" alt=""></td>
                         <td>Active</td>
                         <td>
                             <a class="btn btn-sm btn-info" href="#">View</a>
                             <a class="btn btn-sm btn-warning" href="#">Edit</a>
                             <a class="btn btn-sm btn-danger" href="#">Delete</a>
                         </td>
                     </tr>
                     <tr>
                         <td>1</td>
                         <td>Muhsina Akter</td>
                         <td>muhsina.akter2@gmail.com</td>
                         <td>01715022945</td>
                         <td>admin</td>
                         <td><img style="width: 50px; height: 50px" src="images/a4.png" alt=""></td>
                         <td>Active</td>
                         <td>
                             <a class="btn btn-sm btn-info" href="#">View</a>
                             <a class="btn btn-sm btn-warning" href="#">Edit</a>
                             <a class="btn btn-sm btn-danger" href="#">Delete</a>
                         </td>
                     </tr>
                     <tr>
                         <td>1</td>
                         <td>Muhsina Akter</td>
                         <td>muhsina.akter2@gmail.com</td>
                         <td>01715022945</td>
                         <td>admin</td>
                         <td><img style="width: 50px; height: 50px" src="images/a4.png" alt=""></td>
                         <td>Active</td>
                         <td>
                             <a class="btn btn-sm btn-info" href="#">View</a>
                             <a class="btn btn-sm btn-warning" href="#">Edit</a>
                             <a class="btn btn-sm btn-danger" href="#">Delete</a>
                         </td>
                     </tr>
                     <tr>
                         <td>1</td>
                         <td>Muhsina Akter</td>
                         <td>muhsina.akter2@gmail.com</td>
                         <td>01715022945</td>
                         <td>admin</td>
                         <td><img style="width: 50px; height: 50px" src="images/a4.png" alt=""></td>
                         <td>Active</td>
                         <td>
                             <a class="btn btn-sm btn-info" href="#">View</a>
                             <a class="btn btn-sm btn-warning" href="#">Edit</a>
                             <a class="btn btn-sm btn-danger" href="#">Delete</a>
                         </td>
                     </tr>
                     <tr>
                         <td>1</td>
                         <td>Muhsina Akter</td>
                         <td>muhsina.akter2@gmail.com</td>
                         <td>01715022945</td>
                         <td>admin</td>
                         <td><img style="width: 50px; height: 50px" src="images/a4.png" alt=""></td>
                         <td>Active</td>
                         <td>
                             <a class="btn btn-sm btn-info" href="#">View</a>
                             <a class="btn btn-sm btn-warning" href="#">Edit</a>
                             <a class="btn btn-sm btn-danger" href="#">Delete</a>
                         </td>
                     </tr>
                     </tbody>
                 </table>


            </section>
        </div>

     </div>



                </section>
            </section>
        </section>

    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>


<?php
include_once "templates/footer.php";
?>



