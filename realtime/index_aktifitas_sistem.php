<?php
include "../include/connection.php";
include "../include/restrict.php";
?>
<table id="data-table-fixed-header" class="table table-striped table-bordered table-td-valign-middle">
    <thead>
        <tr>
            <th width="1%">#</th>
            <th class="text-nowrap">Username</th>
            <th class="text-nowrap">Modul</th>
            <th class="text-nowrap">Detail</th>
            <th class="text-nowrap">Aksi</th>
            <th class="text-nowrap">Date Time</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $dataTable = $dbcon->query("SELECT * FROM tbl_aktifitas ORDER BY id DESC LIMIT 10");
        if (mysqli_num_rows($dataTable) > 0) {
            $no = 0;
            while ($row = mysqli_fetch_array($dataTable)) {
                $no++;
        ?>
                <tr class="odd gradeX">
                    <td width="1%" class="f-s-600 text-inverse"><?= $no ?>. </td>
                    <td>
                        <?= $row['IDUNIQ'] ?>
                        <br>
                        <?= $row['username'] ?>
                    </td>
                    <td><?= $row['modul'] ?></td>
                    <td><?= $row['description'] ?></td>
                    <td>
                        <?php if ($row['action'] == 'Insert') { ?>
                            <span class="label label-success">Insert</span>
                        <?php } else if ($row['action'] == 'Update') { ?>
                            <span class="label label-warning">Update</span>
                        <?php } else if ($row['action'] == 'Hapus') { ?>
                            <span class="label label-danger">Hapus</span>
                        <?php } else if ($row['action'] == 'Kirim') { ?>
                            <span class="label label-info">Kirim</span>
                        <?php } ?>
                    </td>
                    <td>
                        <font style="font-size: 8px;"><?= $row['date_created'] ?></font>
                    </td>
                </tr>

            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="7">
                    <center>
                        <div style="display: grid;">
                            <i class="far fa-times-circle no-data"></i> Tidak ada data
                        </div>
                    </center>
                </td>
            </tr>
        <?php }
        mysqli_close($dbcon); ?>
    </tbody>
</table>