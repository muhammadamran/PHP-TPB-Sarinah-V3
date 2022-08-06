<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/alert.php";
include "include/top-header.php";
include "include/sidebar.php";
include "include/cssDatatables.php";

if (isset($_POST["update"])) {

    $NAMA    = $_POST['NAMA'];
    $ID      = $_POST['ID'];

    $cek = mysqli_query($dbcon, "SELECT * FROM referensi_pemasok WHERE ID ='$ID'");
    $num = mysqli_num_rows($cek);
    if ($num == 1) {
        $query = mysqli_query($dbcon, "UPDATE referensi_pemasok set NAMA  ='$NAMA' where ID='$ID'");
        if ($query) {
            header("Location: ./ref_pemasok.php?xtc=02x2201");
        } else {
            echo "Updated Failed - Please contact your administrator";
        }
    } else {
        echo "Records cannot be found!! Please contact your System Administrator";
    }
}

?>
<!-- begin #content -->
<div id="content" class="content">
    <div class="page-title-css">
        <div>
            <h1 class="page-header-css">
                <i class="fas fa-book icon-page"></i>
                <font class="text-page">Referensi</font>
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index_viewonline.php">View Data Online</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Referensi</a></li>
                <li class="breadcrumb-item active">Pemasok</li>
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
            <div class="panel panel-inverse" data-sortable-id="ui-pemasok">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fas fa-info-circle"></i> [Referensi] Pemasok</h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body text-inverse">
                    <table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
                        <thead>
                            <tr>
                                <th style="text-align:center">#</th>
                                <th style="text-align:center">Nama</th>
                                <th style="text-align:center">Alamat</th>
                                <th style="text-align:center">Negara</th>
                                <!-- <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $result2 = mysqli_query($dbcon, "SELECT * FROM referensi_pemasok AS a
                                                             JOIN referensi_negara AS b ON a.KODE_NEGARA=b.KODE_NEGARA ");
                            if (mysqli_num_rows($result2) > 0) {
                                $no = 0;
                                while ($row2 = mysqli_fetch_array($result2)) {
                                    $no++;
                                    echo "<tr>";
                                    echo "<td>" . $no . ".</td>";
                                    echo "<td>" . $row2['NAMA'] . "</td>";
                                    echo "<td>" . $row2['ALAMAT'] . "</td>";
                                    echo "<td>" . $row2['URAIAN_NEGARA'] . "</td>";
                                    // echo "<td align= ''>
                                    // <a href='#' data-toggle='modal' data-target='#myModal$row2[ID]' title='Edit' class='btn btn-success' title='View the Report'><i class='mdi mdi-table-edit'></i> Edit</a>
                                    // <a href='#' data-toggle='modal' data-target='#del$row2[ID]' title='Delete' class='btn btn-danger' title='View the Report'><i class='fas fa-trash-alt'></i> Delete</a>
                                    // </td>";
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
    <!-- end row -->
    <?php include "include/creator.php"; ?>
</div>
<!-- end #content -->
<?php include "include/panel.php"; ?>
<?php include "include/footer.php"; ?>
<?php include "include/jsDatatables.php"; ?>