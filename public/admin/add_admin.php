<?php include 'resources/config_admin.php'; ?>

<?php include 'layout/header.php'; ?>
<?php include 'layout/top_nav.php'; ?>
<?php include 'layout/side_nav.php'; ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section><br><br><br>
    <section class="col-lg-1 connectedSortable">

    </section>
        <!-- Left col -->
        <section class="col-lg-4 col-md-4 col-sm-4  connectedSortable">
            
                <div class="register-logo">
                    <a href="#"><b>Add New Admin</b></a>
                </div>
                <form action="#" method="post">
                    <div class="form-group has-feedback">
                        <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="phone" class="form-control" placeholder="Phone Number" required>
                        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">

                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-success btn-block btn-flat">Add</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
         
        </section>
        <!-- right col -->
</div>
<!-- /.content-wrapper -->



<?php include 'layout/footer.php'; ?>
<?php include 'layout/right_side_bar.php'; ?>















