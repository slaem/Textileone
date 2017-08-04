<?php 
include "koneksi.php"; 
error_reporting('E_NONE');
$sql = new sql();

?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Slaem Apps</title>

        <meta name="description" content="OneUI - Admin Dashboard Template & UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-192x192.png" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- OneUI CSS framework -->
        <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available Classes:

            'sidebar-l'                  Left Sidebar and right Side Overlay
            'sidebar-r'                  Right Sidebar and left Side Overlay
            'sidebar-mini'               Mini hoverable Sidebar (> 991px)
            'sidebar-o'                  Visible Sidebar by default (> 991px)
            'sidebar-o-xs'               Visible Sidebar by default (< 992px)

            'side-overlay-hover'         Hoverable Side Overlay (> 991px)
            'side-overlay-o'             Visible Side Overlay by default (> 991px)

            'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

            'header-navbar-fixed'        Enables fixed header
        -->
        <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
            <!-- Side Overlay-->
            <?php include "right-side.php"; ?>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <?php include "sidebar.php"; ?>
            <!-- END Sidebar -->

            <!-- Header -->
            <?php include "header.php"; ?>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-8">
                            <h1 class="page-heading">
                                Form Transaksi SUKSES<small></small>
                            </h1>
                        </div>
                        <div class="col-sm-4 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Forms</li>
                                <li><a class="link-effect" href="">Form Transaksi</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content content-narrow">
                    <!-- Material Design -->
                    <h2 class="content-heading"></h2>
                    
                    <!-- END Material Design -->
				
					<div class="row">
						<div class="col-md-12">
							<div class="block">
								<div class="block-header">
									<div class="block-options">
										<code>.Transaksi Data</code>
									</div>
									<h3 class="block-title">Transaksi Data</h3>
								</div>
								<div class="block-content">
									<table class="table table-condensed">
										<thead>
											<tr>
												<th class="text-center">#</th>
												<th>Invoice Date</th>
												<th class="">No Invoice</th>
												<th class="">Nama Client</th>
												<th class="">Total Biaya</th>
												<th class="text-center">Status</th>
												<th class="text-center">Actions</th>
											</tr>
										</thead>
										<?php
											$sql = "select * from transaksi WHERE status='Sukses' GROUP BY no_invoice ORDER BY inv_date DESC ";
													$exe = mysql_query($sql);									
													$noUrut = 0;									
													while($row = mysql_fetch_array($exe))
													{						
													  $noUrut++;		
													{                      
										?>
										<tbody>
											<tr>
												<td class="text-center"><?php echo $noUrut; ?></td>
												<td><?php echo $row['inv_date']; ?></td>
												<td class=""><?php echo $row['no_invoice']; ?></td>
												
												<?php
													$id_client = $row['id_client'];
													$sql2 = mysql_query("select * from client WHERE id_client='$id_client'  ")or 
													die(mysql_error());
													$row2=mysql_fetch_array($sql2)
												?> 
												<td class=""><?php echo $row2['nama_client']; ?></td>
												<td class="">Rp. <?php echo number_format($row['total'],0,"",".");?></td>
												<td class="text-center">
													<?php
													$st1 = "Sukses";
														if ($row['status'] == $st1){
															echo "<span class=\"label label-success\">Sukses</span>";
														}
														else{
															echo "<span class=\"label label-danger\">Request</span>";										
														}
													?>
												</td>
												
												<td class="text-center">
													<div class="btn-group">
														<a href="invoice?no_invoice=<?php echo $row['no_invoice']; ?>">
														<button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="View Invoice"><i class="si si-book-open"></i></button></a>
														<a onClick="return confirm('Yakin Ingin Menghapus Data Ini... ???')" 
														href="transaksi-hapus?no_invoice=<?php echo $row['no_invoice'] ?>" title="Hati-hati menghapus data">
														<button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Delete Invoice"><i class="fa fa-times"></i></button></a>
													</div>
												</td>
											</tr>
										</tbody>
										<?php } $total+=$row['total']; }?>
										<tfoot>
										  <tr>
											  <th class="visible-lg"></th>
											  <th colspan="3" style="text-align:right;">Total Keseluruhan</th>
											  <th style="text-align:left; padding-right:8px;">Rp. <?php echo number_format($total,0,"",",");?></th>
										  </tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>
					</div>
				
				</div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <?php include "footer.php"; ?>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Apps Modal -->
        <!-- Opens from the button in the header -->
        <?php include "header-modal.php"; ?>
        <!-- END Apps Modal -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/jquery.placeholder.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/app.js"></script>
    </body>
</html>