<?php

$IdHeader = $_GET['idhead'];

$dataCargo = mysqli_query($dbcon,"SELECT * FROM tpb_header WHERE ID='$IdHeader'");
$GetHeader = mysqli_fetch_array($dataCargo);

?>

<div class="tab-pane fade active show" id="default-tab-1">
  <h4 class="m-t-10"><i class="fa fa-cog"></i> Identity Information</h4>
  <hr>
  <div class="panel-body">
    <div class="row">

      <!-- PEMASOK PART - START -->
      <div class="col-xl-4">
        <div class="form-group row m-b-15 align-items-left">
          <label class="col-sm-3 col-form-label"><b>ID PEMASOK</b></label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $GetHeader[ID];?>" />
          </div>
        </div>

        <div class="form-group row m-b-15 align-items-left">
          <label class="col-sm-3 col-form-label"><b>NAMA PEMASOK</b></label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $GetHeader[NAMA_PEMASOK];?>" />
          </div>
        </div>

        <div class="form-group row m-b-15 align-items-left">
          <label class="col-sm-3 col-form-label"><b>ALAMAT PEMASOK</b></label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $GetHeader[ALAMAT_PEMASOK];?>" />
          </div>
        </div>

        <div class="form-group row m-b-15 align-items-left">
          <label class="col-sm-3 col-form-label"><b>KODE ID PEMASOK</b></label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $GetHeader[KODE_ID_PEMASOK];?>" />
          </div>
        </div>

        <div class="form-group row m-b-15 align-items-left">
          <label class="col-sm-3 col-form-label"><b>KODE NEGARA PEMASOK</b></label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $GetHeader[KODE_NEGARA_PEMASOK];?>" />
          </div>
        </div>

        <div class="form-group row m-b-15 align-items-left">
          <label class="col-sm-3 col-form-label"><b>NO. IZIN PEMASOK</b></label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $GetHeader[NOMOR_IJIN_BPK_PEMASOK];?>" />
          </div>
        </div>

        <div class="form-group row m-b-15 align-items-left">
          <label class="col-sm-3 col-form-label"><b>TGL IZIN PEMASOK</b></label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $GetHeader[TANGGAL_IJIN_BPK_PEMASOK];?>" />
          </div>
        </div>
      </div>
      <!-- PEMASOK PART - END -->

      <!-- PEMILIK PART - START -->
      <div class="col-xl-4">
        <div class="form-group row m-b-15 align-items-left">
          <label class="col-sm-3 col-form-label"><b>API <br> PEMILIK</b></label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $GetHeader[API_PEMILIK];?>" />
          </div>
        </div>

        <div class="form-group row m-b-15 align-items-left">
          <label class="col-sm-3 col-form-label"><b>NAMA <br> PEMILIK</b></label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $GetHeader[NAMA_PEMILIK];?>" />
          </div>
        </div>

        <div class="form-group row m-b-15 align-items-left">
          <label class="col-sm-3 col-form-label"><b>ALAMAT <br>PEMILIK</b></label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $GetHeader[ALAMAT_PEMILIK];?>" />
          </div>
        </div>

        <div class="form-group row m-b-15 align-items-left">
          <label class="col-sm-3 col-form-label"><b>KODE ID -PEMILIK</b></label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $GetHeader[KODE_ID_PEMILIK];?>" />
          </div>
        </div>

        <div class="form-group row m-b-15 align-items-left">
          <label class="col-sm-3 col-form-label"><b>KODE NEGARA PEMILIK</b></label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $GetHeader[KODE_NEGARA_PEMILIK];?>" />
          </div>
        </div>

        <div class="form-group row m-b-15 align-items-left">
          <label class="col-sm-3 col-form-label"><b>NO. IZIN PEMILIK</b></label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $GetHeader[NOMOR_IJIN_BPK_PEMILIK];?>" />
          </div>
        </div>

        <div class="form-group row m-b-15 align-items-left">
          <label class="col-sm-3 col-form-label"><b>TGL IZIN PEMILIK</b></label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $GetHeader[TANGGAL_IJIN_BPK_PEMILIK];?>" />
          </div>
        </div>
      </div>
      <!-- PEMILIK PART - END -->

      <!-- PENGUSAHA PART - START -->
      <div class="col-xl-4">
        <div class="form-group row m-b-15 align-items-left">
          <label class="col-sm-3 col-form-label"><b>API PENGUSAHA</b></label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $GetHeader[API_PENGUSAHAvcv];?>" />
          </div>
        </div>

        <div class="form-group row m-b-15 align-items-left">
          <label class="col-sm-3 col-form-label"><b>NAMA PENGUSAHA</b></label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $GetHeader[NAMA_PENGUSAHA];?>" />
          </div>
        </div>

        <div class="form-group row m-b-15 align-items-left">
          <label class="col-sm-3 col-form-label"><b>ALAMAT PENGUSAHA</b></label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $GetHeader[ALAMAT_PENGUSAHA];?>" />
          </div>
        </div>

        <div class="form-group row m-b-15 align-items-left">
          <label class="col-sm-3 col-form-label"><b>KODE ID PENGUSAHA</b></label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $GetHeader[KODE_ID_PENGUSAHA];?>" />
          </div>
        </div>

        <div class="form-group row m-b-15 align-items-left">
          <label class="col-sm-3 col-form-label"><b>KODE NEGARA PENGUSAHA</b></label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $GetHeader[KODE_NEGARA_PENGUSAHA];?>" />
          </div>
        </div>

        <div class="form-group row m-b-15 align-items-left">
          <label class="col-sm-3 col-form-label"><b>NO. IZIN PENGUSAHA</b></label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $GetHeader[NOMOR_IJIN_BPK_PENGUSAHA];?>" />
          </div>
        </div>

        <div class="form-group row m-b-15 align-items-left">
          <label class="col-sm-3 col-form-label"><b>TGL IZIN PENGUSAHA</b></label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $GetHeader[TANGGAL_IJIN_BPK_PENGUSAHA];?>" />
          </div>
        </div>
      </div>
      <!-- PENGUSAHA PART - END -->

    </div>
  </div>
</div>