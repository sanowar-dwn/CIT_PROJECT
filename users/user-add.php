<?php
session_start();
require '../dashboard_includes/header.php'; ?> 
<div class="row">
    <div class="col-md-12">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Add New User</h4>
            </div>
            <div class="tab-inn">
                <form action="registration_post.php" method="POST"> 
                    <?php if(isset($_SESSION['register_success'])){?>
                        <div class="alert alert-success">
                            <?= $_SESSION['register_success'] ?>
                        </div>
                   <?php } unset($_SESSION['register_success'])?>  
                    <div class="row">
                        <div class="input-field col s12">
                            <input value="<?= isset($_SESSION['name'])?$_SESSION['name']:''; ?>" name="name" type="text">
                            <?php if(isset($_SESSION['blank_error']['name'])){ ?>
                                <div class="alert alert-warning"> <?= $_SESSION['blank_error']['name']; ?> </div>
                                <?php  } unset($_SESSION['blank_error']['name']) ?>
                            <label for="first_name">Full Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input value="<?= isset($_SESSION['email'])?$_SESSION['email']:''; ?>" name="email" type="email">
                            <?php if(isset($_SESSION['blank_error']['email'])){ ?>
                                <div class="alert alert-warning"> <?= $_SESSION['blank_error']['email']; ?> </div>
                                <?php  } unset($_SESSION['email']) ?>
                            <?php if(isset($_SESSION['exist_email'])){ ?>
                                <div class="alert alert-warning"> <?= $_SESSION['exist_email']; ?> </div>
                                <?php  } unset($_SESSION['exist_email']) ?>
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input value="<?= isset($_SESSION['password'])?$_SESSION['password']:''; ?>" name="password" type="password">
                            <?php if(isset($_SESSION['blank_error']['password'])){ ?>
                                <div class="alert alert-warning"> <?= $_SESSION['blank_error']['password']; ?> </div>
                                <?php  } unset($_SESSION['blank_error']['password']) ?>
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="submit" class="waves-effect waves-light btn-large">
                        </div>
                    </div>
                </form>
            </div>
        </div>
<?php 
unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['password']);
?>
<?php require '../dashboard_includes/footer.php'; ?> 