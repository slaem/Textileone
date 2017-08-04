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
                <!-- You can use the .hidden-print class to hide an element in printing -->
				<form method="POST" action="">
					<?php
					$no_invoice = $_GET['no_invoice'];
					$sql = "select * from transaksi where no_invoice='$no_invoice' ";
					$exe = mysql_query($sql);
					$row = mysql_fetch_array($exe);
					?> 
                <div class="content bg-gray-lighter hidden-print">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                                Invoice <small>Slaemweb Corporation.</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Generic</li>
                                <li><a class="link-effect" href="">Invoice</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content content-boxed">
                    <!-- Invoice -->
                    <div class="block">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <!-- Print Page functionality is initialized in App() -> uiHelperPrint() -->
                                    <button type="button" onclick="App.initHelper('print-page');"><i class="si si-printer"></i> Print Invoice</button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">#<?php echo $row['no_invoice'] ?></h3>
                        </div>
                        <div class="block-content block-content-narrow">
                            <!-- Invoice Info -->
							<?php
								$id_client = $row['id_client'];
								$sql2 = mysql_query("select * from client WHERE id_client='$id_client'  ")or 
								die(mysql_error());
								$row2=mysql_fetch_array($sql2)
							?> 
                            <div class="h1 text-center push-30-t push-30 hidden-print">INVOICE</div>
                            <hr class="hidden-print">
                            <div class="row items-push-2x">
                                <!-- Company Info -->
                                <div class="col-xs-6 col-sm-4 col-lg-3">
                                    <p class="h3 font-w200 push-5">Slaemweb</p>
                                    <address>
                                        Address<br>
                                        Jakarta Pusat<br>
                                        Indonesia, 10650<br>
                                        <i class="si si-call-end"></i> 0812 9820 4142
                                    </address>
                                </div>
                                <!-- END Company Info -->

                                <!-- Client Info -->
                                <div class="col-xs-6 col-sm-4 col-sm-offset-4 col-lg-3 col-lg-offset-6 text-right">
                                    <p><strong>INVOICE TO</strong></p>
									<p class="h3 font-w400 push-5"><?php echo $row2['nama_perusahaan'] ?></p>
                                    <address>
                                        Address<br>
                                        <?php echo $row2['alamat'] ?><br>
                                        <i class="si si-call-end"></i> <?php echo $row2['no_hp'] ?>
                                    </address>
                                </div>
                                <!-- END Client Info -->
                            </div>
                            <!-- END Invoice Info -->

                            <!-- Table -->
                            <div class="table-responsive push-50">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style=""></th>
                                            <th>Description</th>
                                            <th class="text-right" style="">Amount</th>
                                        </tr>
                                    </thead>
									
                                    <tbody>
                                        <?php
										$totals = $row['jumlah'];
										$sql3 = "select * from transaksi WHERE no_invoice = '$no_invoice' ";
											$exe3 = mysql_query($sql3);	
											$noUrut = 0;	
										while($row3 = mysql_fetch_array($exe3))
														{						
														  $noUrut++;		
														{   
										?>
										<tr>
                                            <td class="text-center"><?php echo $noUrut; ?></td>
                                            <td>
                                                <p class="font-w600 push-10"><?php echo $row3['deskripsi'] ?></p>
                                                <!--<div class="text-muted">Design/Development of iOS and Android application</div>-->
                                            </td>
                                            <td class="text-right">Rp. <?php echo number_format($row3['jumlah'],0,"",".");?></td>
                                        </tr>
                                        <?php } $total+=$row3['jumlah']; } ?>
                                        <tr>
                                            <td colspan="2" class="font-w600 text-right">Subtotal</td>
                                            <td class="text-right">Rp. <?php echo number_format($total,0,"",",");?></td>
                                        </tr>
										
										<?php $diskons=$row['diskon']; ?>
										<tr>
                                            <td colspan="2" class="font-w600 text-right">Diskon</td>
                                            <td class="text-right">Rp. <?php echo number_format($diskons,0,"",",");?></td>
                                        </tr>
										
                                        <?php $totals=$row['total']; ?>
                                        <tr class="active">
                                            <td colspan="2" class="font-w700 text-uppercase text-right">Grand Total</td>
                                            <td class="font-w700 text-right" style="color:blue;">Rp. <?php echo number_format($totals,0,"",",");?></td>
                                        </tr>
										<?php
										$sql4 = "select * from transaksi where no_invoice='$no_invoice' ";
										$exe4 = mysql_query($sql4);
										$row4 = mysql_fetch_array($exe4);
										?> 
										<tr class="active">
                                            <td colspan="3" class="font-w500"><strong>NOTE : <i style="color:red;"><?php echo $row4['keterangan'] ?></i></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END Table -->

                            <!-- Footer -->
                            <hr class="hidden-print">
                            <p class="text-muted text-center"><small>Thank you very much for doing business with us. We look forward to working with you again!</small></p>
                            <!-- END Footer -->
                        </div>
                    </div>
                    <!-- END Invoice -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
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