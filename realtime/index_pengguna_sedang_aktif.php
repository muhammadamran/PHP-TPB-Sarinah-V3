<?php
include "../include/connection.php";
include "../include/restrict.php";
?>
<table id="data-table-fixed-header" class="table table-striped table-bordered table-td-valign-middle">
    <thead>
        <tr>
            <th width="1%">#</th>
            <th width="1%" data-orderable="false"></th>
            <th class="text-nowrap">Username</th>
            <th class="text-nowrap">Perangkat</th>
            <th class="text-nowrap">Sign In Time</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $dataTable = $dbcon->query("SELECT log.id,peg.foto,log.log_username AS userUSE,log_agent,log_date,log.log_type,log.out_type
                                    FROM tbl_log AS log
                                    LEFT JOIN tbl_pegawai AS peg ON log.log_username=peg.username
                                    WHERE log.out_type IS NULL
                                    AND log.id=(SELECT max(id) FROM tbl_log)
                                    GROUP BY log.log_username
                                    ORDER BY log.id DESC");
        if (mysqli_num_rows($dataTable) > 0) {
            $no = 0;
            while ($row = mysqli_fetch_array($dataTable)) {
                $no++;
        ?>
                <tr class="odd gradeX">
                    <td width="1%" class="f-s-600 text-inverse"><?= $no ?>. </td>
                    <td width="1%" class="with-img">
                        <?php if ($row['foto'] == NULL || $row['foto'] == 'default-user-images.jpeg') { ?>
                            <img src="assets/images/users/default-user-images.jpeg" class="img-rounded height-30" />
                        <?php } else { ?>
                            <img src="assets/images/users/<?= $row['foto'] ?>" class="img-rounded height-30" />
                        <?php } ?>
                    </td>
                    <td><?= $row['userUSE'] ?></td>
                    <td>
                        <?php if ($row['log_agent'] == 'Desktop') { ?>
                            <i class="fas fa-laptop"></i> <?= $row['log_agent'] ?>
                        <?php } else if ($row['log_agent'] == 'Mobile') { ?>
                            <i class="fas fa-mobile-alt"></i> <?= $row['log_agent'] ?>
                        <?php } ?>
                    </td>
                    <td>
                        <font style="font-size: 8px;"><?= $row['log_date'] ?></font>
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