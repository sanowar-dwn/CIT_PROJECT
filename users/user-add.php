<?php require '../dashboard_includes/header.php'; ?> 
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
                            <input name="name" id="first_name" type="text" class="validate">
                            <label for="first_name">Full Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="email" id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="password" id="password" type="password" class="validate">
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