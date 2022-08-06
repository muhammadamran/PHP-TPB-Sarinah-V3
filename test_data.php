<?php
include "include/connection.php";
include "include/head.php";
include "include/alert.php";
include "include/cssDatatables.php";
?>
<!-- begin #content -->
<div id="content" style="padding: 10px">
    <div class="page-title-css">
        <div>
            <h1 class="page-header-css">
                <i class="fas fa-database icon-page"></i>
                <font class="text-page">DB Tabel TPB</font>
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">DB Tabel TPB</li>
            </ol>
        </div>
        <div>
            <button class="btn btn-primary-css"><i class="fas fa-calendar-alt"></i> <span id="ct"></span></button>
        </div>
    </div>
    <div class="line-page"></div>
    <!-- begin Select Tabel -->
    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="ui-icons-1">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fas fa-info-circle"></i> DB Tabel TPB</h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body text-inverse">
                    <form action="/" method="POST">
                        <fieldset>
                            <div class="form-group row m-b-15">
                                <label class="col-md-3 col-form-label">Pilih Tabel</label>
                                <div class="col-md-7">
                                    <select class="default-select2 form-control">
                                        <option value="">-- Pilih Tabel --</option>
                                        <?php
                                        $result = $dbcon->query("SELECT TABLE_NAME FROM view_select_table ORDER BY TABLE_NAME ASC");
                                        foreach ($result as $row) {
                                        ?>
                                            <option value="<?= $row['TABLE_NAME'] ?>"><?= $row['TABLE_NAME'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Select Tabel -->
</div>
<!-- end #content -->
<?php include "include/panel.php"; ?>
<?php include "include/footer.php"; ?>
<?php include "include/jsDatatables.php"; ?>