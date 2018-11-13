<?php include 'resources/config_admin.php'; ?>

<?php include 'layout/header.php'; ?>
<?php include 'layout/top_nav.php'; ?>
<?php include 'layout/side_nav.php'; ?>



<?php
if(!isset($_SESSION['name'])){

    redirect("../../public/main.php");
}


?>

<div id="page-wrapper">

    <div class="container-fluid">




        <?php
        if($_SERVER['REQUEST_URI']=="/bibi2/public/admin/" || $_SERVER['REQUEST_URI']=="/bibi2/public/admin/admin_index.php") {
            include ("dashboard.php");

        }

        if(isset($_GET['rider_orders'])){

            include ("../resources/templates/front/rider/rider_order.php");
        }
        if(isset($_GET['product_order_rider'])){

            include ("../resources/templates/front/rider/product_order_rider.php");
        }




        ?>



    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->



<?php include 'layout/footer.php'; ?>
<?php include 'layout/right_side_bar.php'; ?>

