<?php
include "include/connection.php";
// include "include/restrict.php";
include "include/head.php";
include "include/alert.php";
include "include/top-header.php";
include "include/sidebar.php";
?>
<!-- begin #content -->
<div id="content" class="content">
    <div class="page-title-css">
        <div>
            <h1 class="page-header-css">
                <i class="fas fa-passport icon-page"></i>
                <font class="text-page">BC</font>
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">BC</a></li>
                <li class="breadcrumb-item active">BC 2.3 / View Record Details</li>
            </ol>
        </div>
        <div>
            <button class="btn btn-primary-css"><i class="fas fa-calendar-alt"></i> <span id="ct"></span></button>
        </div>
    </div>
    <div class="line-page"></div>
    <!-- begin row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="ui-icons-1">
                <div class="panel-heading">
                    <h4 class="panel-title">BC 2.3 / Record Details / ID_HEADER: <?php echo $_GET['idhead'];?></h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body text-inverse">
                    <!-- <center>
 -->                        <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#default-tab-1" data-toggle="tab" class="nav-link active">
                                <span class="d-sm-none">Tab 1</span>
                                <span class="d-sm-block d-none">Identity</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#default-tab-2" data-toggle="tab" class="nav-link">
                                <span class="d-sm-none">Tab 2</span>
                                <span class="d-sm-block d-none">Logistics</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#default-tab-3" data-toggle="tab" class="nav-link">
                                <span class="d-sm-none">Tab 3</span>
                                <span class="d-sm-block d-none">Information</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <?php

                        include 'include/part/master_view_tab1.php';
                        include 'include/part/master_view_tab2.php';
                        include 'include/part/master_view_tab3.php';

                        ?>
                        
                    </div>
                <!-- </center> -->
            </div>
        </div>
    </div>
</div>
<!-- end row -->
<?php include "include/creator.php"; ?>
</div>
<!-- end #content -->
<?php include "include/panel.php"; ?>
<?php include "include/footer.php"; ?>
<?php include "include/jsDatatables.php"; ?>