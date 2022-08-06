<?php

$DataIDCargo = $_GET['rcd_id'];

$DataNOCargo = $_GET['rcd_rt_no'];



$dataCargo = mysqli_query($koneksi,"SELECT * FROM tb_master_record WHERE rcd_id='$DataIDCargo' AND rcd_rt_no='$DataNOCargo'");

$resultCargo = mysqli_fetch_array($dataCargo);

?>

<!-- page 3 - start -->

<div class="card mb-2">

  <div class="card-header for-part" id="headingCargo">

    <div>

      <h5 class="mb-0">

        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseCargo" aria-expanded="false" aria-controls="collapseCargo">

          <span class="fas fa-angle-down mr-3"></span>Cargo Details

        </button>

      </h5>

    </div>

    <div class="part-details">

      <h5 class="mb-0">

        <?php if ($resultCargo['last_cargo'] == NULL) { ?>

        <?php } else { ?>

          <i class="mdi mdi-calendar"></i> Last Update <?= $resultCargo['last_cargo'] ?>

        <?php } ?>

      </h5>

    </div>

  </div>

  <div id="collapseCargo" class="collapse" aria-labelledby="headingCargo" data-parent="#accordion3">

    <div class="card-body">

      <form action="" method="POST">

        <div class="row">

          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="card">

              <div class="card-body"> 

                <h5 class="card-header">Cargo Data Form</h5>

                <br>

                <div class="row">

                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

                    <div class="form-group">

                      <label>Cargo Ready Date</label>

                      <input type="date" name="cargo_ready_date" class="form-control" value="<?= $resultCargo['cargo_ready_date'] ?>">

                      <input type="hidden" name="NameID" value="<?= $DataIDCargo ?>">

                      <input type="hidden" name="NameNO" value="<?= $DataNOCargo ?>">

                    </div>

                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

                    <div class="form-group">

                      <label>Cargo Commodity</label>

                      <input type="text" name="carcommo" class="form-control" value="<?= $resultCargo['carcommo'] ?>">

                    </div>

                  </div>

                  <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">

                    <div class="form-group">

                      <label>Total Number of Pieces</label>

                      <input type="text" name="totalpiece" class="form-control" value="<?= $resultCargo['totalpiece'] ?>">

                    </div>

                  </div>

                  <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">

                    <div class="form-group">

                      <label>Total Weight of shipment in KG</label>

                      <input type="text" name="totalweight" class="form-control" value="<?= $resultCargo['totalweight'] ?>">

                      <p style="font-size:8px"><b><i>!!!F or Dimensions (LxWxH) in Inches and Weight in KG *** each piece must have a weight listed *** Example 45x45x45-300Kg</i></b></p>

                    </div>

                  </div>

                  <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">

                    <div class="form-group">

                      <label>Cargo Dimensions</label>

                      <input type="text" name="cardimen" class="form-control" value="<?= $resultCargo['cardimen'] ?>">

                    </div>

                  </div>

                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 10px;">

                    <h5 class="card-header">Vehicle Details </h5>

                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

                    <div class="form-group">

                      <label>Container Type</label>

                      <select class="form-control" name="shipno" id="shipno" onchange="getDest(this.value)">

                        <?php if ($resultCargo['shipno'] == NULL || $resultCargo['shipno'] == '') { ?>

                          <option value="">--- SELECT ---</option>

                        <?php } else { ?>

                          <option value="<?= $resultCargo['shipno'] ?>"><?= $resultCargo['shipno'] ?></option>

                          <option value="">--- SELECT ---</option>

                        <?php } ?>

                        <option value="Container 20 ft.">Container 20 ft.</option>

                        <option value="Container 40 ft.">Container 40 ft.</option>

                        <option value="Container 40 ft. High Cube">Container 40 ft. High Cube</option>

                        <option value="Dry Container Standard">Dry Container Standard</option>

                        <option value="Flat Rack Container">Flat Rack Container</option>

                        <option value="Refrigerated Container">Refrigerated Container</option>

                        <option value="Tank Container">Tank Container</option>

                        <option value="Custom">Custom</option>

                      </select>

                    </div>

                  </div>

                  <div id="txtHint">

                  </div><!-- /.form group -->

                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

                    <div class="form-group">

                      <label>Truck Type</label>

                      <select class="form-control" name="truckType">

                        <?php if ($resultCargo['truckType'] == NULL || $resultCargo['truckType'] == '') { ?>

                          <option value="">--- SELECT ---</option>

                        <?php } else { ?>

                          <option value="<?= $resultCargo['truckType'] ?>"><?= $resultCargo['truckType'] ?></option>

                          <option value="">--- SELECT ---</option>

                        <?php } ?>

                        <option value="Box CDE Truck">Box CDE Truck</option>

                        <option value="Box CDD Truck">Box CDD Truck</option>

                        <option value="Dump Truck">Dump Truck</option>

                        <option value="Fuso Truck">Fuso Truck</option>

                        <option value="Wingbox Truck">Wingbox Truck</option>

                        <option value="Trailer Truck">Trailer Truck</option>

                        <option value="Tronton Truck">Tronton Truck</option>

                        <option value="777HD Truck">777HD Truck</option>

                      </select>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="col-xl-12">

            <div class="form-group" style="margin-top: 20px;margin-bottom: 0px;">

              <p align="right">

                <button class="btn btn-primary" type="submit" name="edit_cargo"><span class='mdi mdi-content-save'></span> Save Cargo Details</button>

              </p>

            </div>

          </div>

        </div> <!-- end tag of ROW Class Tag -->

      </form>

    </div>

  </div>

</div>

<!-- page 3 - end -->