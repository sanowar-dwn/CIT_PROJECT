<?php
session_start();
require '../dashboard_includes/header.php'; ?> 
<div class="row">
    <div class="col-md-12">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Add New Banner</h4>
            </div>
            <div class="tab-inn">
                <form action="registration_post.php" method="POST"> 
                    <?php if(isset($_SESSION['register_success'])){?>
                        <div class="alert alert-success">
                            <?= $_SESSION['register_success'] ?>
                        </div>
                   <?php } unset($_SESSION['register_success'])?>  
                    <div class="row">
                        <div class="input-field col s6">
                            <input value="<?= isset($_SESSION['intro'])?$_SESSION['intro']:''; ?>" name="intro" type="text">
                            <?php if(isset($_SESSION['blank_error']['intro'])){ ?>
                                <div class="alert alert-warning"> <?= $_SESSION['blank_error']['intro']; ?> </div>
                                <?php  } unset($_SESSION['blank_error']['intro']) ?>
                            <label for="first_name">Intro</label>
                        </div>
                        <div class="input-field col s6">
                            <input value="<?= isset($_SESSION['name'])?$_SESSION['name']:''; ?>" name="name" type="text">
                            <?php if(isset($_SESSION['blank_error']['name'])){ ?>
                                <div class="alert alert-warning"> <?= $_SESSION['blank_error']['name']; ?> </div>
                                <?php  } unset($_SESSION['blank_error']['name']) ?>
                            <label for="first_name">Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input value="<?= isset($_SESSION['banner_about'])?$_SESSION['banner_about']:''; ?>" name="banner_about" type="text">
                            <?php if(isset($_SESSION['blank_error']['banner_about'])){ ?>
                                <div class="alert alert-warning"> <?= $_SESSION['blank_error']['banner_about']; ?> </div>
                                <?php  } unset($_SESSION['blank_error']['banner_about']) ?>
                            <label for="first_name">About</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input value="<?= isset($_SESSION['fb_link'])?$_SESSION['fb_link']:''; ?>" name="fb_link" type="text">
                            <?php if(isset($_SESSION['blank_error']['fb_link'])){ ?>
                                <div class="alert alert-warning"> <?= $_SESSION['blank_error']['fb_link']; ?> </div>
                                <?php  } unset($_SESSION['blank_error']['fb_link']) ?>
                            <label for="first_name">Facebook Link</label>
                        </div>

                        <div class="input-field col s6">
                            <input value="<?= isset($_SESSION['twitter_link'])?$_SESSION['twitter_link']:''; ?>" name="twitter_link" type="text">
                            <?php if(isset($_SESSION['blank_error']['twitter_link'])){ ?>
                                <div classz="alert alert-warning"> <?= $_SESSION['blank_error']['twitter_link']; ?> </div>
                                <?php  } unset($_SESSION['blank_error']['twitter_link']) ?>
                            <label for="first_name">Twitter Link</label>
                        </div>
                        
                        <div class="input-field col s6">
                            <input value="<?= isset($_SESSION['fb_link'])?$_SESSION['fb_link']:''; ?>" name="fb_link" type="text">
                            <?php if(isset($_SESSION['blank_error']['fb_link'])){ ?>
                                <div class="alert alert-warning"> <?= $_SESSION['blank_error']['fb_link']; ?> </div>
                                <?php  } unset($_SESSION['blank_error']['fb_link']) ?>
                            <label for="first_name">Facebook Link</label>
                        </div>

                        <div class="input-field col s6">
                            <input value="<?= isset($_SESSION['twitter_link'])?$_SESSION['twitter_link']:''; ?>" name="twitter_link" type="text">
                            <?php if(isset($_SESSION['blank_error']['twitter_link'])){ ?>
                                <div class="alert alert-warning"> <?= $_SESSION['blank_error']['twitter_link']; ?> </div>
                                <?php  } unset($_SESSION['blank_error']['twitter_link']) ?>
                            <label for="first_name">Twitter Link</label>
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
?>
<?php require '../dashboard_includes/footer.php'; ?> 