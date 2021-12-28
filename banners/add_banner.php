<?php
session_start();
require '../dashboard_includes/header.php'; ?>
<div class="row">
    <div class="col-md-12">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Add New Banner</h4>
                <?php if (isset($_SESSION['register_success'])) { ?>
                    <div class="alert alert-success">
                        <?= $_SESSION['register_success'] ?>
                    </div>
                <?php } unset($_SESSION['register_success'])  ?>
            </div>
            <div class="tab-inn">
                <form action="add_banner_post.php" method="POST">
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="sas" name="intro" type="text">
                            <label>Intro</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="name" type="text">
                            <label>Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="descrip" type="text">
                            <label>Description</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="link1" type="text">
                            <label>Link 1</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="link2" type="text">
                            <label>Link 2</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="link3" type="text">
                            <label>Link 4</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="link4" type="text">
                            <label>Link 3</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="button" type="text">
                            <label>Button</label>
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
        <?php require '../dashboard_includes/footer.php'; ?>