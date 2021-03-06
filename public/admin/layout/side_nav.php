<?php
$name = $_SESSION['name'];

?>


 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $name; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
          <li class="treeview">
              <a href="dashboard.php">
                  <i class="fa fa-dashboard"></i>
                  <span>Dashboard</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="dashboard.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
              </ul>
          </li>

<!--          for blank page-->

<!--          <li class="treeview">-->
<!--              <a href="new_page.php">-->
<!--                  <i class="fa fa-files-o"></i>-->
<!--                  <span>Blank Page</span>-->
<!--                  <span class="pull-right-container">-->
<!--              <i class="fa fa-angle-left pull-right"></i>-->
<!--            </span>-->
<!--              </a>-->
<!--              <ul class="treeview-menu">-->
<!--                  <li><a href="new_page.php"><i class="fa fa-circle-o"></i> Blank Page</a></li>-->
<!--              </ul>-->
<!--          </li>-->

          <li class="treeview">
              <a href="#">
                  <i class="fa fa-money"></i>
                  <span>Financial</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href=""><i class="fa fa-circle-o"></i> Sales</a></li>
                  <li><a href=""><i class="fa fa-circle-o"></i> Salary</a></li>
                  <li><a href=""><i class="fa fa-circle-o"></i> Loan</a></li>
                  <li><a href=""><i class="fa fa-circle-o"></i> Invoices</a></li>
                  <li><a href=""><i class="fa fa-circle-o"></i> Summary</a></li>
              </ul>
          </li>
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-users"></i>
                  <span>Beautician</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="view_beautician.php"><i class="fa fa-circle-o"></i> View Beautician</a></li>
                  <li><a href="add_beautician.php"><i class="fa fa-circle-o"></i> Add Beautician</a></li>
                  <li><a href=""><i class="fa fa-circle-o"></i> Schedule</a></li>
                  <li><a href=""><i class="fa fa-circle-o"></i> Gallery</a></li>
              </ul>
          </li>
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-user"></i>
                  <span>Customer</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="view_cust.php"><i class="fa fa-circle-o"></i> View Customer</a></li>
              </ul>
          </li>
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-calendar"></i>
                  <span>Calendar</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="calendar_admin.php"><i class="fa fa-circle-o"></i> Calendar</a></li>
                  <li><a href="todolist.php"><i class="fa fa-circle-o"></i> To Do List</a></li>
              </ul>
          </li>
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-envelope"></i>
                  <span>Mailbox</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="mailbox.php"><i class="fa fa-circle-o"></i> Inbox</a></li>
                  <li><a href="compose.php"><i class="fa fa-circle-o"></i> Compose</a></li>
                  <li><a href=""><i class="fa fa-circle-o"></i> Read</a></li>
              </ul>
          </li>
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-area-chart"></i>
                  <span>Report</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href=""><i class="fa fa-circle-o"></i> Customer Report</a></li>
                  <li><a href=""><i class="fa fa-circle-o"></i> Sales Report</a></li>
              </ul>
          </li>
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-cogs"></i>
                  <span>Developer Setting</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="view_admin.php"><i class="fa fa-circle-o"></i> View Admin</a></li>
                  <li><a href="add_admin.php"><i class="fa fa-circle-o"></i> Add Admin</a></li>

              </ul>
          </li>






      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>