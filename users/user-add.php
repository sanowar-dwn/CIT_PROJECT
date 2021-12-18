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
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="name" type="text">
                            <?php if(isset($_SESSION['blank_error']['name'])){
                                echo $_SESSION['blank_error']['name'];
                            } unset($_SESSION['blank_error']['name']) ?>
                            <label for="first_name">Full Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="email" type="email">
                            <?php if(isset($_SESSION['blank_error']['email'])){
                                echo $_SESSION['blank_error']['email'];
                            } unset($_SESSION['blank_error']['email']) ?>
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="password" type="password">
                            <?php if(isset($_SESSION['blank_error']['password'])){
                                echo $_SESSION['blank_error']['password'];
                            } unset($_SESSION['blank_error']['password']) ?>
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
                        
<?php require '../dashboard_includes/footer.php'; ?> 