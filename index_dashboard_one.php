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
<!-- <div id="content" class="content"> -->
<div id="content" class="nav-top-content">
	<div class="page-title-css">
		<div>
			<h1 class="page-header-css">
				<i class="fas fa-chart-pie icon-page"></i>
				<font class="text-page">Dashboard</font>
			</h1>
			<ol class="breadcrumb">
				<li class="breadcrumb-item active">Dashboard</li>
			</ol>
		</div>
		<div>
			<button class="btn btn-primary-css"><i class="fas fa-calendar-alt"></i> <span id=""><?= date_indo(date('Y-m-d'), TRUE) ?> - <font style="text-transform: uppercase;"><?= date('h:m:i a') ?></font></span></button>
		</div>
	</div>
	<div class="line-page"></div>

	<div class="row">
		<div class="col-xl-12">
			<ul class="nav nav-pills mb-2">
				<li class="nav-item">
					<a href="index_dashboard.php" class="nav-link">
						<span class="d-sm-none">Main</span>
						<span class="d-sm-block d-none">Main</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="index_dashboard_one.php" class="nav-link active">
						<span class="d-sm-none">Dokumen Pabean</span>
						<span class="d-sm-block d-none">Dokumen Pabean</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="index_dashboard_two.php" class="nav-link">
						<span class="d-sm-none">Gate Mandiri</span>
						<span class="d-sm-block d-none">Gate Mandiri</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="index_dashboard_three.php" class="nav-link">
						<span class="d-sm-none">Komunikasi</span>
						<span class="d-sm-block d-none">Komunikasi</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="index_dashboard_four.php" class="nav-link">
						<span class="d-sm-none">Referensi</span>
						<span class="d-sm-block d-none">Referensi</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="index_dashboard_five.php" class="nav-link">
						<span class="d-sm-none">Utility</span>
						<span class="d-sm-block d-none">Utility</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="index_dashboard_six.php" class="nav-link">
						<span class="d-sm-none">Report</span>
						<span class="d-sm-block d-none">Report</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="index_dashboard_seven.php" class="nav-link">
						<span class="d-sm-none">Administrator</span>
						<span class="d-sm-block d-none">Administrator</span>
					</a>
				</li>
			</ul>
			<div class="tab-content mb-4">
				<div class="tab-pane fade active show" id="tab-main">
					<!-- Data 1 -->
					<div class="row">
						<div class="col-xl-6">
							<div class="card border-0 bg-dark text-white mb-3 overflow-hidden">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-7 col-lg-8">
											<div class="mb-3 text-grey">
												<b>TOTAL SALES</b>
												<span class="ml-2">
													<i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Total sales" data-placement="top" data-content="Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels."></i>
												</span>
											</div>
											<div class="d-flex mb-1">
												<h2 class="mb-0">Rp. <span data-animation="number" data-value="64559.25">0.00</span></h2>
												<div class="ml-auto mt-n1 mb-n1"><div id="total-sales-sparkline"></div></div>
											</div>
											<div class="mb-3 text-grey">
												<i class="fa fa-caret-up"></i> <span data-animation="number" data-value="33.21">0.00</span>% compare to last week
											</div>
											<hr class="bg-white-transparent-2" />
											<div class="row text-truncate">
												<div class="col-6">
													<div class="f-s-12 text-grey">Total sales order</div>
													<div class="f-s-18 m-b-5 f-w-600 p-b-1" data-animation="number" data-value="1568">0</div>
													<div class="progress progress-xs rounded-lg bg-dark-darker m-b-5">
														<div class="progress-bar progress-bar-striped rounded-right bg-teal" data-animation="width" data-value="55%" style="width: 0%"></div>
													</div>
												</div>
												<div class="col-6">
													<div class="f-s-12 text-grey">Avg. sales per order</div>
													<div class="f-s-18 m-b-5 f-w-600 p-b-1">Rp. <span data-animation="number" data-value="41.20">0.00</span></div>
													<div class="progress progress-xs rounded-lg bg-dark-darker m-b-5">
														<div class="progress-bar progress-bar-striped rounded-right" data-animation="width" data-value="55%" style="width: 0%"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-5 col-lg-4 align-items-center d-flex justify-content-center">
											<img src="assets/img/svg/img-1.svg" height="150px" class="d-none d-lg-block" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="row">
								<div class="col-sm-6">
									<div class="card border-0 bg-dark text-white text-truncate mb-3">
										<div class="card-body">
											<div class="mb-3 text-grey">
												<b class="mb-3">CONVERSION RATE</b> 
												<span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Conversion Rate" data-placement="top" data-content="Percentage of sessions that resulted in orders from total number of sessions." data-original-title="" title=""></i></span>
											</div>
											<div class="d-flex align-items-center mb-1">
												<h2 class="text-white mb-0"><span data-animation="number" data-value="2.19">0.00</span>%</h2>
												<div class="ml-auto">
													<div id="conversion-rate-sparkline"></div>
												</div>
											</div>
											<div class="mb-4 text-grey">
												<i class="fa fa-caret-down"></i> <span data-animation="number" data-value="0.50">0.00</span>% compare to last week
											</div>
											<div class="d-flex mb-2">
												<div class="d-flex align-items-center">
													<i class="fa fa-circle text-red f-s-8 mr-2"></i>
													Added to cart
												</div>
												<div class="d-flex align-items-center ml-auto">
													<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="262">0</span>%</div>
													<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="3.79">0.00</span>%</div>
												</div>
											</div>
											<div class="d-flex mb-2">
												<div class="d-flex align-items-center">
													<i class="fa fa-circle text-warning f-s-8 mr-2"></i>
													Reached checkout
												</div>
												<div class="d-flex align-items-center ml-auto">
													<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="11">0</span>%</div>
													<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="3.85">0.00</span>%</div>
												</div>
											</div>
											<div class="d-flex">
												<div class="d-flex align-items-center">
													<i class="fa fa-circle text-lime f-s-8 mr-2"></i>
													Sessions converted
												</div>
												<div class="d-flex align-items-center ml-auto">
													<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="57">0</span>%</div>
													<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="2.19">0.00</span>%</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="card border-0 bg-dark text-white text-truncate mb-3">
										<div class="card-body">
											<div class="mb-3 text-grey">
												<b class="mb-3">STORE SESSIONS</b> 
												<span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Store Sessions" data-placement="top" data-content="Number of sessions on your online store. A session is a period of continuous activity from a visitor." data-original-title="" title=""></i></span>
											</div>
											<div class="d-flex align-items-center mb-1">
												<h2 class="text-white mb-0"><span data-animation="number" data-value="70719">0</span></h2>
												<div class="ml-auto">
													<div id="store-session-sparkline"></div>
												</div>
											</div>
											<div class="mb-4 text-grey">
												<i class="fa fa-caret-up"></i> <span data-animation="number" data-value="9.5">0.00</span>% compare to last week
											</div>
											<div class="d-flex mb-2">
												<div class="d-flex align-items-center">
													<i class="fa fa-circle text-teal f-s-8 mr-2"></i>
													Mobile
												</div>
												<div class="d-flex align-items-center ml-auto">
													<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="25.7">0.00</span>%</div>
													<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="53210">0</span></div>
												</div>
											</div>
											<div class="d-flex mb-2">
												<div class="d-flex align-items-center">
													<i class="fa fa-circle text-blue f-s-8 mr-2"></i>
													Desktop
												</div>
												<div class="d-flex align-items-center ml-auto">
													<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="16.0">0.00</span>%</div>
													<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="11959">0</span></div>
												</div>
											</div>
											<div class="d-flex">
												<div class="d-flex align-items-center">
													<i class="fa fa-circle text-aqua f-s-8 mr-2"></i>
													Tablet
												</div>
												<div class="d-flex align-items-center ml-auto">
													<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="7.9">0.00</span>%</div>
													<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="5545">0</span></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Data 1 -->
					<!-- Data Pengguna All -->
					<div id="data-pengguna-all"></div>
                    <!-- End Data Pengguna All -->
				</div>
			</div>
		</div>
	</div>


	<?php include "include/creator.php"; ?>
</div>
<?php 
include "include/footer.php";
include "include/jsDatatables.php";
?>

<script type="text/javascript">
	// UPDATE PASSWORD SUCCESS
	if (window?.location?.href?.indexOf('SUpdatePasswordSuccessCC') > -1) {
		Swal.fire({
			title: 'Password berhasil diupdate!',
			icon: 'success',
			text: 'Password berhasil diupdate didalam <?= $alertAppName ?>!'
		})
		history.replaceState({}, '', './index.php');
	}

	// REALTIME DATA LOAD
	// Pengguna All
	function RealTimePenggunaAll() {
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("data-pengguna-all").innerHTML =
				this.responseText;
			}
		};
		xhttp.open("GET", "realtime/index_pengguna_all.php", true);
		xhttp.send();
	}
	setInterval(function() {
		RealTimePenggunaAll();
		// Time
	}, 1000);
	window.onload = RealTimePenggunaAll;
	// END REALTIME DATA LOAD
</script>