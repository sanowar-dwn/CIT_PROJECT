<?php
session_start();
require '../dashboard_includes/header.php'; ?>
<div class="row">
    <div class="col-md-12">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Add New Education</h4>
            </div>
            <div class="tab-inn">
                <form action="add_education_post.php" method="POST">
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="year" type="text">
                            <label>Year</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="course" type="text">
                            <label>Course</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="bar" type="number">
                            <label>% in bar</label>
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