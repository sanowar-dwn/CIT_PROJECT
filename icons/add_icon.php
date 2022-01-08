<?php
session_start();
require '../dashboard_includes/header.php'; ?>
<div class="row">
    <div class="col-md-12">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Add New Icon</h4>
                <?php if (isset($_SESSION['register_success'])) { ?>
                    <div class="alert alert-success">
                        <?= $_SESSION['register_success'] ?>
                    </div>
                <?php } unset($_SESSION['register_success'])  ?>
            </div>
            <div class="tab-inn">
                <form action="add_icon_post.php" method="POST">
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="cheat code" name="code" type="text">
                            <label>Icon code</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="name" type="text">
                            <label>Icon name</label>
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