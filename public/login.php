<?php include '../resources/config.php' ?>
<?php include '../resources/templates/front/header.php' ?>




    <section class="login first grey">
        <div class="container">
            <div class="box-wrapper">
                <div class="box box-border">
                    <div class="box-body">
                        <h4>Login</h4>
                        <form action="" method="post" enctype="multipart/form-data">
                            <?php login_customer(); ?>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" id="email" name="email" value="" placeholder="Email" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="fw">Password
                                    <a href="forgot.html" class="pull-right">Forgot Password?</a>
                                </label>
                                <input type="password" id="pass" name="pass" value="" placeholder="Password" class="form-control"/>
                            </div>
                            <div class="form-group text-right">
                                <input type="submit" name="submit" value="Login" class="btn btn-primary btn-block">
                            </div>
                            <div class="form-group text-center">
                                <span class="text-muted">Don't have an account?</span> <a href="register.html">Create one</a>
                            </div>
                            <div class="title-line">
                                or
                            </div>
                            <a href="#" class="btn btn-social btn-block facebook"><i class="ion-social-facebook"></i> Login with Facebook</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>









<?php include '../resources/templates/front/footer.php' ?>