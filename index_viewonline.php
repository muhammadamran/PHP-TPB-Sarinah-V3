<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/alert.php";
include "include/top-header.php";
// include "include/top-sidebar.php";
include "include/sidebar.php";
include "include/cssDatatables.php";
?>
<style type="text/css">
	.row-dinding {
	    background: #fff;
	    border-radius: 5px;
	}

	.svg-img-center {
		display: flex;
	    justify-content: center;
	    align-items: center;
	}

	.images-svg {
	    width: 635px;
	}
</style>
<!-- begin #content -->
<div id="content" class="content">
	<div class="page-title-css">
		<div>
			<h1 class="page-header-css">
				<i class="fas fa-globe icon-page"></i>
				<font class="text-page">View Data Online</font>
			</h1>
			<ol class="breadcrumb">
				<li class="breadcrumb-item active">Perusahaan: <?= $resultSetting['company']  ?></li>
			</ol>
		</div>
		<div>
			<button class="btn btn-primary-css"><i class="fas fa-calendar-alt"></i> <span id=""><?= date_indo(date('Y-m-d'), TRUE) ?> - <font style="text-transform: uppercase;"><?= date('h:m:i a') ?></font></span></button>
		</div>
	</div>
	<div class="line-page"></div>
	<div class="row">
		<div class="col-md-12">
			<div class="row-dinding">
				<div class="svg-img-center">
					<img src="assets/img/svg/data-extraction-animate.svg" class="images-svg">
				</div>
			</div>
		</div>
	</div>
	<?php include "include/creator.php"; ?>
</div>
<!-- end #content -->
<?php 
// include "include/panel.php";
include "include/footer.php";
include "include/jsDatatables.php";
?>