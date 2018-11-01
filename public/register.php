<?php include '../resources/config.php' ?>
<?php include '../resources/templates/front/header.php' ?>




    <section class="login first grey">
        <div class="container">
            <div class="box-wrapper">
                <div class="box box-border">
                    <div class="box-body">
                        <h5 class="text-center bg-warning" align="center" ><?php display_message(); ?></h5>
                        <h4>Register</h4>
                        <form action="" method="post" enctype="multipart/form-data">
                            <?php register_customer(); ?>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" id="name" name="name" value="" placeholder="Name" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" id="email" name="email" value="" placeholder="Email" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control" required name="role">
                                    <option value="customer">Customer</option>
                                    <option value="beautician">Beautician</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="fw">Password</label>
                                <input type="password" id="pass" name="pass" value="" placeholder="Password" class="form-control" required/>
                            </div>
                            <div class="form-group text-right">
                                <input type="submit" name="submit" value="Register" class="btn btn-primary btn-block">
                            </div>
                            <div class="form-group text-center">
                                <span class="text-muted">Already have an account?</span> <a href="login.php">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>







<?php include '../resources/templates/front/footer.php' ?>