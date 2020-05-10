<!DOCTYPE html>
<html lang="en">
  <head>
      <?php        
        include('_head.php');
        session_start();
      
        // Cek Role session. when this page opened at first time it will set role=3 as default
        if(!isset($_SESSION['role'])){
          $_SESSION['role'] = '3';
        }

        // when you change role dropdown menu on top navigation
        if(isset($_GET['user_role'])){
          $_SESSION['role'] = $_GET['user_role'];
        }

        
        if($_SESSION['role']==1) {
          $role = 'Super Admin';
        } else 
        if($_SESSION['role']==2) {
          $role = 'Product Admin';
        } else 
        if($_SESSION['role']==3) {
          $role = 'Sales Admin';
        } else 
        if($_SESSION['role']==4) {
          $role = 'Suplier/Vendor';
        } 

       ?> 
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <?php include('_sidebar.php') ?>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <?php include('_topnav.php') ?>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <?php
            $page ="";
            $action ="";
            if(isset($_GET['p'])) {
              $page = $_GET['p'];
              if(isset($_GET['a'])) {
                $action = $_GET['a'];
                include($page."/".$action.".php");  
              } else {
                include($page."/index.php");
              }
            } else {
              include("dashboard.php");
            }
          ?>


        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            E-Seminar Admin</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

      <?php include('_scripts.php') ?>
	
  </body>
</html>
