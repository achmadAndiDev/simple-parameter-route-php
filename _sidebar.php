<?php
    $page = "";
    if(isset($_GET['p'])){
        $page = $_GET['p'];
    }
    $action = "";
    if(isset($_GET['a'])){
        $action = $_GET['a'];
    }
?>
<div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        <a href="#" class="site_title">Admin Panel <span>E-Store</span>  </a>
    </div>

    <div class="clearfix"></div>
 
    <div class="profile clearfix">
        <div class="profile_pic">
            <img src="img/logo/logo.png" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info" style="padding: 8px 1px 10px !important;">
            <span>Welcome,</span>
            <h2>Achmad Andi S.</h2>

            <i style="color:#b1b1b1">( <?= $role ?> )</i>
        </div>
    </div> 

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section"> 
            <ul class="nav side-menu">
                
                <?php if($_SESSION['role']==1) { ?>
                    <li class="<?= ($page=='user_admin' ? 'active' : '' )  ?>"><a href="?p=user_admin"><i class="fa fa-user"></i> User Admin Page </a></li>
                <?php }
                if($_SESSION['role']==1 || $_SESSION['role']==2 ) { ?>
                    <li><a><i class="fa fa-square"></i> Product Master <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="?p=category">Categories</a></li>
                            <li><a href="?p=product">Product</a></li>
                        </ul>
                    </li>
                    <li class=""><a href="#"><i class="fa fa-building"></i> Suppliers/Vendor </a></li>
                    <li class=""><a href="#"><i class="fa fa-users"></i> Customers </a></li>
                <?php } ?>
               
            </ul>
            <?php if($_SESSION['role']==1 || $_SESSION['role']==3) { ?>
                <h3>Custommer Transactions</h3>
                <ul class="nav side-menu">
                    <li class=""><a href="?p=karya_ilmiah"><i class="fa fa-shopping-cart"></i> Transactions </a></li>
                    <li class=""><a href="#"><i class="fa fa-credit-card"></i> Custommer Payments </a></li>
                </ul>
            <?php } ?>

            


        </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->

    <!-- /menu footer buttons -->
</div>