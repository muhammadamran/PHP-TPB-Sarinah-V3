<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/alert.php";
include "include/top-header.php";
include "include/top-sidebar.php";
// include "include/sidebar.php";
include "include/cssDatatables.php";
?>
<!-- begin #content -->
<div id="content" class="nav-top-content">
    <div class="page-title-css">
        <div>
            <h1 class="page-header-css">
                <i class="fas fa-desktop icon-page"></i>
                <font class="text-page">CK5 / Sarinah REPORT</font>
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Index</a></li>
                <li class="breadcrumb-item"><a href="index_report.php">Report</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">CK5</a></li>
                <li class="breadcrumb-item active">Sarinah Records</li>
            </ol>
        </div>
        <div>
            <button class="btn btn-primary-css"><i class="fas fa-calendar-alt"></i> <span id="ct"></span></button>
        </div>
    </div>
    <div class="line-page"></div>

    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="ui-icons-1">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fas fa-info-circle"></i> CK5 - Sarinah / Master Data</h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body text-inverse">
                    <div class="table-responsive">
                        <table id="TableData" class="table table-striped table-bordered table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th style="text-align:center">#ID</th>
                                    <th style="text-align:center">Detail</th>
                                    <th style="text-align:center">PackingList</th>
                                    <th style="text-align:center">Invoice</th>
                                    <th style="text-align:center">NO. AJU</th>
                                    <th style="text-align:center">BC.11</th>
                                    <th style="text-align:center">PEMASOK</th>
                                    <th style="text-align:center">PEMILIK</th>
                                    <th style="text-align:center">PENGANGKUT</th>
                                    <th style="text-align:center">PENGUSAHA</th>
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $result2 = mysqli_query($dbcon, "SELECT * FROM tpb_header ORDER BY ID ASC ");
                                if (mysqli_num_rows($result2) > 0) {
                                    $no = 0;
                                    while ($row2 = mysqli_fetch_array($result2)) {
                                        $no++;
                                        echo "<tr>";
                                        echo "<td align=''><a href='dp_bc2_3_view.php?idhead=$row2[ID]' class='btn btn-success' title='View the Report'>$row2[ID]</a></td>";
                                        echo "<td style='text-align: center;'>" .
                                            "<a href='report_ck5_sarinah_detail.php?AJU=$row2[NOMOR_AJU]' target='_blank' class='btn btn-primary'>
                                            <i class='fas fa-eye'></i><br>
                                            <font style='font-size: 8px;display: flex;width: 55px;justify-content: center;'>
                                                 Lihat Detail
                                            </font>
                                        </a>" .
                                            "</td>";
                                        echo "<td style='text-align: center;'>" .
                                            "<a href='report_ck5_sarinah_packing.php?AJU=$row2[NOMOR_AJU]' target='_blank' class='btn btn-primary'>
                                        <i class='fas fa-eye'></i><br>
                                        <font style='font-size: 8px;display: flex;width: 55px;justify-content: center;'>
                                             packinglist
                                        </font>
                                    </a>" .
                                            "</td>";
                                        echo "<td style='text-align: center;'>" .
                                            "<a href='report_ck5_sarinah_invoice.php?AJU=$row2[NOMOR_AJU]' target='_blank' class='btn btn-primary'>
                                        <i class='fas fa-eye'></i><br>
                                        <font style='font-size: 8px;display: flex;width: 55px;justify-content: center;'>
                                             invoice
                                        </font>
                                    </a>" .
                                            "</td>";
                                        echo "<td>" . $row2['NOMOR_AJU'] . "</td>";
                                        echo "<td>" . $row2['NOMOR_BC11'] . "</td>";
                                        echo "<td>" . $row2['NAMA_PEMASOK'] . ".</td>";
                                        echo "<td>" . $row2['NAMA_PEMILIK'] . "</td>";
                                        echo "<td>" . $row2['NAMA_PENGANGKUT'] . "</td>";
                                        echo "<td>" . $row2['NAMA_PENGUSAHA'] . "</td>";
                                        echo "</tr>";
                                ?>
                                        <div class="modal fade" id="myModal<?php echo $row2['ID']; ?>" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title"><b>[Users] </b> Update Record</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action=" ">
                                                            <div class="form-group">
                                                                <label>NAMA</label>
                                                                <input type="text" name="NAMA" value="<?php echo $row2['NAMA']; ?>" class="form-control" required>
                                                                <input type="text" name="ID" value="<?php echo $row2['ID']; ?>" class="form-control" readonly>
                                                            </div>
                                                            <button type="submit" name="update" value="update" class="btn btn-primary">Update</button>
                                                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="del<?php echo $row2['ID']; ?>" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title"><b>[Records] </b> Delete Record</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action=" ">
                                                            <div class="form-group">
                                                                <label>Are you sure delete this record?</label>
                                                                <h6>Record ID : <?php echo $row2['client_name']; ?></h6>

                                                                <input type="hidden" value="<?php echo $_SESSION['username']; ?>" name="user_name" class="form-control" required>
                                                                <input type="hidden" value="<?php echo $row2['ID']; ?>" name="ID" class="form-control" required>
                                                                <input type="hidden" value="<?php echo $row2['client_name']; ?>" name="client_name" class="form-control" required>

                                                            </div>
                                                            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    }
                                }
                                mysqli_close($dbcon);
                                ?>
                            </tbody>
                        </table>
                    </div>
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

<script type="text/javascript">
    // UPDATE SUCCESS
    if (window?.location?.href?.indexOf('UploadSuccess') > -1) {
        Swal.fire({
            title: 'Data berhasil diupload!',
            icon: 'success',
            text: 'Data berhasil diupload didalam <?= $alertAppName ?>!'
        })
        history.replaceState({}, '', './report_ck5_plb.php');
    }
    // UPDATE FAILED
    if (window?.location?.href?.indexOf('UploadFailed') > -1) {
        Swal.fire({
            title: 'Data gagal diupload!',
            icon: 'error',
            text: 'Data gagal diupload didalam <?= $alertAppName ?>!'
        })
        history.replaceState({}, '', './report_ck5_plb.php');
    }

    // TableData
    $(document).ready(function() {
        $('#TableData').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
    });
</script>