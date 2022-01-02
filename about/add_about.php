<?php
session_start();
require '../dashboard_includes/header.php'; ?>
<div class="row">
    <div class="col-md-12">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Add About</h4>
                <?php if (isset($_SESSION['register_success'])) { ?>
                    <div class="alert alert-success">
                        <?= $_SESSION['register_success'] ?>
                    </div>
                <?php }
                unset($_SESSION['register_success'])  ?>
            </div>
            <div class="tab-inn">
                <form action="add_about_post.php" method="POST">
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea name="about" class="form-control" placeholder="About Text" ></textarea>
                            <?php if(isset($_SESSION['blank_error']['about'])){ ?>
                                <div class="alert alert-warning">
                                    <?= $_SESSION['blank_error']['about']; ?>
                                </div>
                           <?php } unset($_SESSION['blank_error']['about']); ?>
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