<?php session_start(); ?>
<?php require '../dashboard_includes/header.php';
require '../db.php'; ?>
<?php
$select_banner = "SELECT * FROM banners";
$select_banner_result = mysqli_query($db_connect, $select_banner);

?>
<div class="col-md-12">
    <?php if(isset($_SESSION['success'])){ ?>
        <div class="alert alert-danger">
            <?= $_SESSION['success'] ?>
        </div>
    <?php } unset($_SESSION['success']) ?>
    <div class="box-inn-sp">
        <div class="inn-title">
            <h4>Banner Details</h4>
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

        </div>
        <div class="tab-inn">
            <div class="table-responsive table-desi">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Intro</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($select_banner_result as $key => $banner) { ?>
                            <tr>
                                <td> <?= $banner['intro'] ?> </td>
                                <td> <?= $banner['name'] ?> </td>
                                <td> <?= $banner['descrip'] ?> </td>
                                <td> <?php if ($banner['status'] == 1) { ?>
                                        <div class="btn btn-success">
                                            <a href="banner_status.php?id=<?= $banner['id'] ?>">Active</a>
                                        </div>
                                    <?php } else { ?>
                                        <div class="btn-secondary btn">
                                            <a href="banner_status.php?id=<?= $banner['id'] ?>">Deactive</a>
                                        </div>
                                    <?php } ?>
                                </td>
                                <td>
                                    <a href="view_banner.php?id=<?= $banner['id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                </td>
                                <td>
                                    <a href="banner-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                                <td>
                                    <a href="delete_banner.php?id=<?= $banner['id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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