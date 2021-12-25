<?php session_start(); ?>
<?php require '../dashboard_includes/header.php'; require '../db.php'; ?>
<?php
$select_user = "SELECT * FROM users WHERE status=0";
$select_user_result = mysqli_query($db_connect, $select_user);

$select_user_2 = "SELECT * FROM users WHERE status=1";
$select_user_result_2 = mysqli_query($db_connect, $select_user_2);
?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>User Details</h4>
                                    <?php if(isset($_SESSION['trash'])){ ?>
                                       <div class="alert alert-warning">
                                           <?= $_SESSION['trash'] ?>
                                       </div> 
                                  <?php  } unset($_SESSION['trash']) ?>

                                    <?php if(isset($_SESSION['restore'])){ ?>
                                       <div class="alert alert-success">
                                           <?= $_SESSION['restore'] ?>
                                       </div> 
                                  <?php  } unset($_SESSION['restore']) ?>

                                    <?php if(isset($_SESSION['delete'])){ ?>
                                       <div class="alert alert-danger">
                                           <?= $_SESSION['delete'] ?>
                                       </div> 
                                  <?php  } unset($_SESSION['delete']) ?>

                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <ul id="dr-users" class="dropdown-content">
                                        <li><a href="user-add.html">Add New</a>
                                        </li>
                                        <li><a href="user-edit.html">Edit</a>
                                        </li>
                                        <li><a href="#!">Update</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                        </li>
                                        <li><a href="user-view.html"><i class="material-icons">subject</i>View All</a>
                                        </li>
                                    </ul>

                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>User</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>View</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($select_user_result as $key => $user){ ?>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name"><?= $user['name']; ?></span></a>
                                                    </td>
                                                    <td><?= $user['email']; ?></td>
                                                    <td>
                                                        <a href="user-view.php?id=<?= $user['id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="trash.php?id=<?= $user['id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Trashed users -->
                    <div class="row py-5">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Trashed Users</h4>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>User</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Restore</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($select_user_result_2 as $key => $user){ ?>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name"><?= $user['name']; ?></span></a>
                                                    </td>
                                                    <td><?= $user['email']; ?></td>
                                                    <td>
                                                        <a href="restore.php?id=<?= $user['id']; ?>"><i class="fa fa-undo" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="delete.php?id=<?= $user['id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->
    <section>
        <div class="fixed-action-btn vertical">
            <a class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
                </li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
                </li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
                </li>
            </ul>
        </div>
    </section>

<?php require '../dashboard_includes/footer.php' ?>
