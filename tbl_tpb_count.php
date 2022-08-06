<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/alert.php";
include "include/top-header.php";
include "include/sidebar.php";
include "include/cssDatatables.php";
include "include/cssForm.php";
?>
<!-- begin #content -->
<div id="content" class="content">
    <div class="page-title-css">
        <div>
            <h1 class="page-header-css">
                <i class="fab fa-contao icon-page"></i>
                <font class="text-page">Count Tabel TPB</font>
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index_viewonline.php">View Data Online</a></li>
                <li class="breadcrumb-item active">Count Tabel TPB</li>
            </ol>
        </div>
        <div>
            <button class="btn btn-primary-css"><i class="fas fa-calendar-alt"></i> <span id="ct"></span></button>
        </div>
    </div>
    <div class="line-page"></div>
    <div class="row">
        <div class="col-sm-4">
            <div id="data-count-tables-up"></div>
        </div>
        <div class="col-sm-4">
            <div id="data-count-tables-up-local"></div>
        </div>
        <div class="col-sm-4">
            <div id="data-count-tables-local"></div>
        </div>
    </div>
    <?php include "include/creator.php"; ?>
</div>
<!-- end #content -->
<?php include "include/panel.php"; ?>
<?php include "include/footer.php"; ?>
<?php include "include/jsDatatables.php"; ?>
<?php include "include/jsForm.php"; ?>
<script>
    // COUNT RECORD TABLES DATABASE HELLOS
    function DataRecordUp() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("data-count-tables-up").innerHTML =
                this.responseText;
            }
        };
        xhttp.open("GET", "realtime/count_tables_up.php", true);
        xhttp.send();
    }
    setInterval(function() {
        DataRecordUp();
        // Time
    }, 1000);
    window.onload = DataRecordUp;

    // COUNT RECORD CHECK
    function DataRecordUpLocal() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("data-count-tables-up-local").innerHTML =
                this.responseText;
            }
        };
        xhttp.open("GET", "realtime/count_tables_up_local.php", true);
        xhttp.send();
    }
    setInterval(function() {
        DataRecordUpLocal();
        // Time
    }, 1000);
    window.onload = DataRecordUpLocal;

    // COUNT RECORD TABLES DATABASE TPB LOCAL (RESTAPI) 
    function DataRecordLocal() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("data-count-tables-local").innerHTML =
                this.responseText;
            }
        };
        xhttp.open("GET", "realtime/count_tables_local.php", true);
        xhttp.send();
    }
    setInterval(function() {
        DataRecordLocal();
        // Time
    }, 1000);
    window.onload = DataRecordLocal;
</script>