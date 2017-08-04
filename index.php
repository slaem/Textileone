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

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/slick/slick.min.css">
        <link rel="stylesheet" href="assets/js/plugins/slick/slick-theme.min.css">

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
                <div class="content bg-image overflow-hidden" style="background-image: url('assets/img/photos/dashimg.jpg');">
                    <div class="push-50-t push-15">
                        <h1 class="h2 text-white animated zoomIn">Dashboard</h1>
                        <h2 class="h5 text-white-op animated zoomIn">Welcome Administrator</h2>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Stats -->
                <div class="content bg-white border-b">
                    <div class="row items-push text-uppercase">
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Slaemweb Clients</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Total Client</small></div>
							<?php									  
							$sql3 = "select * from client " or die(mysql_error());
							$exe3 = mysql_query($sql3);
							$jumlah3 = mysql_num_rows($exe3);                   	           		
							?>   
                            <a class="h2 font-w300 text-primary animated flipInX" href="client" ><?php echo $jumlah3;?> Client</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Slaemweb Domains</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Total Domain</small></div>
							<?php									  
							$sql2 = "select * from domain " or die(mysql_error());
							$exe2 = mysql_query($sql2);
							$jumlah2 = mysql_num_rows($exe2);                   	           		
							?>   
                            <a class="h2 font-w300 text-primary animated flipInX" href="domain"><?php echo $jumlah2;?> Domain</a>
                        </div>
							<div class="block-content" hidden="">
								<table class="table table-condensed">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="">No Invoice</th>
											<th class="">Total Biaya</th>
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
											<td class=""><?php echo $row['no_invoice']; ?></td>
											<td class="">Rp. <?php echo number_format($row['total'],0,"",".");?></td>
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
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-success animated fadeIn">Success Transaction</div>
							<?php									  
							$sql4 = "select * from transaksi WHERE status='Sukses' GROUP BY no_invoice " or die(mysql_error());
							$exe4 = mysql_query($sql4);
							$jumlah4 = mysql_num_rows($exe4);                   	           		
							?>   
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> <?php echo $jumlah4;?> Invoice</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="transaksi-sukses"><?php echo number_format($total,0,"",",");?></a>
                        </div>
							<div class="block-content" hidden="">
								<table class="table table-condensed">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="">No Invoice</th>
											<th class="">Total Biaya</th>
										</tr>
									</thead>
									<?php
										$sqlx = "select * from transaksi WHERE status='Request' GROUP BY no_invoice ORDER BY inv_date DESC ";
												$exex = mysql_query($sqlx);									
												$noUrut = 0;									
												while($rowx = mysql_fetch_array($exex))
												{						
												  $noUrut++;		
												{                      
									?>
									<tbody>
										<tr>
											<td class="text-center"><?php echo $noUrut; ?></td>
											<td class=""><?php echo $rowx['no_invoice']; ?></td>
											<td class="">Rp. <?php echo number_format($rowx['total'],0,"",".");?></td>
										</tr>
									</tbody>
									<?php } $totalx+=$rowx['total']; }?>
									<tfoot>
									  <tr>
										  <th class="visible-lg"></th>
										  <th colspan="3" style="text-align:right;">Total Keseluruhan</th>
										  <th style="text-align:left; padding-right:8px;">Rp. <?php echo number_format($totalx,0,"",",");?></th>
									  </tr>
									</tfoot>
								</table>
							</div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-danger animated fadeIn">Request Transaction</div>
							<?php									  
							$sql5 = "select * from transaksi WHERE status='Request' GROUP BY no_invoice " or die(mysql_error());
							$exe5 = mysql_query($sql5);
							$jumlah5 = mysql_num_rows($exe5);                   	           		
							?>   
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> <?php echo $jumlah5;?> Invoice</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="transaksi"><?php echo number_format($totalx,0,"",",");?></a>
                        </div>
                    </div>
                </div>
                <!-- END Stats -->

                <!-- Page Content -->
				<div class="content">
                    <div class="row">
						<div class="col-lg-4">
                            <!-- Latest Sales Widget -->
                            <div class="block">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">Latest Domain</h3>
                                </div>
                                <div class="block-content bg-gray-lighter">
                                    <div class="row items-push">
                                        <div class="col-xs-4">
                                            <div class="text-muted"><small><i class="si si-calendar"></i> All Time</small></div>
                                            <div class="font-w600"><?php echo $jumlah2;?> Domain</div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="text-muted"><small><i class="si si-calendar"></i> All Time</small></div>
                                            <div class="font-w600"><?php echo $jumlah3;?> Client</div>
                                        </div>
                                        <div class="col-xs-4 h1 font-w300 text-right"><a href="domain">+</a></div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <div class="pull-t pull-r-l">
                                        <div class="js-slider remove-margin-b" data-slider-autoplay="true" data-slider-autoplay-speed="2500">
                                            <div>
                                                <table class="table remove-margin-b font-s13">
													<?php
														$sql = "select * from domain ORDER BY tgl_perpanjang ASC limit 0,10 ";
																$exe = mysql_query($sql);									
																$noUrut = 0;									
																while($row = mysql_fetch_array($exe))
																{						
																  $noUrut++;		
																{                      
													?>
                                                    <tbody>
                                                        <tr>
                                                            <td class="font-w600"><a href="domain-edit?id_domain=<?php echo $row['id_domain']; ?>"><?php echo $row['nama_domain']; ?></a></td>
                                                            <td class="font-w600 text-success text-right"><?php echo $row['tgl_perpanjang']; ?></td>
                                                        </tr>
                                                    </tbody>
													<?php }}?>
                                                </table>
                                            </div>
											<div>
                                                <table class="table remove-margin-b font-s13">
													<?php
														$sql = "select * from domain GROUP BY id_client ORDER BY id_client DESC limit 0,10 ";
																$exe = mysql_query($sql);									
																$noUrut = 0;									
																while($row = mysql_fetch_array($exe))
																{						
																  $noUrut++;		
																{                      
													?>
                                                    <tbody>
                                                        <tr>
															<?php
																$id_client = $row['id_client'];
																$sql2 = mysql_query("select * from client WHERE id_client='$id_client'  ")or 
																die(mysql_error());
																$row2=mysql_fetch_array($sql2)
															?> 
                                                            <td class="font-w600"><a href="#"><?php echo $row2['nama_client']; ?></a></td>
															<?php									  
															$sql9 = "select * from domain WHERE id_client='$id_client' " or die(mysql_error());
															$exe9 = mysql_query($sql9);
															$jumlah9 = mysql_num_rows($exe9);                   	           		
															?>
															<td class="font-w600 text-success text-right"><?php echo $jumlah9;?> Domain</td>
                                                        </tr>
                                                    </tbody>
													<?php }}?>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- END Slick slider -->
                                    </div>
                                </div>
                            </div>
                            <!-- END Latest Sales Widget -->
                        </div>
						<div class="col-lg-4">
                            <div class="block">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">Latest Webmail</h3>
                                </div>
                                <div class="block-content bg-gray-lighter">
                                    <div class="row items-push">
                                        <div class="col-xs-4">
											<?php									  
											$sql6 = "select * from webmail " or die(mysql_error());
											$exe6 = mysql_query($sql6);
											$jumlah6 = mysql_num_rows($exe6);                   	           		
											?>   
                                            <div class="text-muted"><small><i class="si si-calendar"></i> Total</small></div>
                                            <div class="font-w600"><?php echo $jumlah6;?> Email</div>
                                        </div>
                                        <div class="col-xs-4">
											<?php									  
											$sql7 = "select * from webmail GROUP BY id_domain " or die(mysql_error());
											$exe7 = mysql_query($sql7);
											$jumlah7 = mysql_num_rows($exe7);                   	           		
											?>
                                            <div class="text-muted"><small><i class="si si-calendar"></i> From</small></div>
                                            <div class="font-w600"><?php echo $jumlah7;?> Domain</div>
                                        </div>
                                        <div class="col-xs-4 h1 font-w300 text-right"><a href="webmail">+</a></div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <div class="pull-t pull-r-l">
                                        <div class="js-slider remove-margin-b" data-slider-autoplay="true" data-slider-autoplay-speed="5000">
                                            <div>
                                                <table class="table remove-margin-b font-s13">
													<?php
														$sql = "select * from webmail ORDER BY id_email DESC limit 0,10 ";
																$exe = mysql_query($sql);									
																$noUrut = 0;									
																while($row = mysql_fetch_array($exe))
																{						
																  $noUrut++;		
																{                      
													?>
                                                    <tbody>
                                                        <tr>
                                                            <td class="font-w600"><a href="webmail-edit?id_email=<?php echo $row['id_email']; ?>"><?php echo $row['user_email']; ?></a></td>
                                                        </tr>
                                                    </tbody>
													<?php }}?>
                                                </table>
                                            </div>
											<div>
                                                <table class="table remove-margin-b font-s13">
													<?php
														$sql = "select * from webmail GROUP BY id_domain ORDER BY id_email DESC limit 0,10 ";
																$exe = mysql_query($sql);									
																$noUrut = 0;									
																while($row = mysql_fetch_array($exe))
																{						
																  $noUrut++;		
																{                      
													?>
                                                    <tbody>
                                                        <tr>
															<?php
																$id_domain = $row['id_domain'];
																$sql2 = mysql_query("select * from domain WHERE id_domain='$id_domain'  ")or 
																die(mysql_error());
																$row2=mysql_fetch_array($sql2)
															?> 
                                                            <td class="font-w600"><a href="#"><?php echo $row2['nama_domain']; ?></a></td>
															<?php									  
															$sql8 = "select * from webmail WHERE id_domain='$id_domain' " or die(mysql_error());
															$exe8 = mysql_query($sql8);
															$jumlah8 = mysql_num_rows($exe8);                   	           		
															?>
															<td class="font-w600 text-success text-right"><?php echo $jumlah8;?> Email</td>
                                                        </tr>
                                                    </tbody>
													<?php }}?>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- END Slick slider -->
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-4">
                            
                        </div>
					</div>
				</div>
				<div class="content">
                    <div class="row">
						<div class="col-lg-4">
                            <!-- Latest Sales Widget -->
                            <div class="block">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">Latest Domain</h3>
                                </div>
                                <div class="block-content bg-gray-lighter">
                                    <div class="row items-push">
                                        <div class="col-xs-4">
                                            <div class="text-muted"><small><i class="si si-calendar"></i> All Time</small></div>
                                            <div class="font-w600"><?php echo $jumlah2;?> Domain</div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="text-muted"><small><i class="si si-calendar"></i> All Time</small></div>
                                            <div class="font-w600"><?php echo $jumlah3;?> Client</div>
                                        </div>
                                        <div class="col-xs-4 h1 font-w300 text-right"><a href="domain">+</a></div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <div class="pull-t pull-r-l">
                                        <div class="js-slider remove-margin-b" data-slider-autoplay="true" data-slider-autoplay-speed="2500">
                                            <div>
                                                <table class="table remove-margin-b font-s13">
													<?php
														$sql = "select * from domain ORDER BY tgl_perpanjang ASC limit 0,10 ";
																$exe = mysql_query($sql);									
																$noUrut = 0;									
																while($row = mysql_fetch_array($exe))
																{						
																  $noUrut++;		
																{                      
													?>
                                                    <tbody>
                                                        <tr>
                                                            <td class="font-w600"><a href="domain-edit?id_domain=<?php echo $row['id_domain']; ?>"><?php echo $row['nama_domain']; ?></a></td>
                                                            <td class="font-w600 text-success text-right"><?php echo $row['tgl_perpanjang']; ?></td>
                                                        </tr>
                                                    </tbody>
													<?php }}?>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- END Slick slider -->
                                    </div>
                                </div>
                            </div>
                            <!-- END Latest Sales Widget -->
                        </div>
						<div class="col-lg-8">
                            <!-- Main Dashboard Chart -->
                            <div class="block">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">Weekly Overview</h3>
                                </div>
                                <div class="block-content block-content-full bg-gray-lighter text-center">
                                    <!-- Chart.js Charts (initialized in js/pages/base_pages_dashboard.js), for more examples you can check out http://www.chartjs.org/docs/ -->
                                    <div style="height: 374px;"><canvas class="js-dash-chartjs-lines"></canvas></div>
                                </div>
                                <div class="block-content text-center">
                                    <div class="row items-push text-center">
                                        <div class="col-xs-6 col-lg-3">
                                            <div class="push-10"><i class="si si-graph fa-2x"></i></div>
                                            <div class="h5 font-w300 text-muted">+ 205 Sales</div>
                                        </div>
                                        <div class="col-xs-6 col-lg-3">
                                            <div class="push-10"><i class="si si-users fa-2x"></i></div>
                                            <div class="h5 font-w300 text-muted">+ 25% Clients</div>
                                        </div>
                                        <div class="col-xs-6 col-lg-3 visible-lg">
                                            <div class="push-10"><i class="si si-star fa-2x"></i></div>
                                            <div class="h5 font-w300 text-muted">+ 10 Ratings</div>
                                        </div>
                                        <div class="col-xs-6 col-lg-3 visible-lg">
                                            <div class="push-10"><i class="si si-share fa-2x"></i></div>
                                            <div class="h5 font-w300 text-muted">+ 35 Followers</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Main Dashboard Chart -->
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

        <!-- Page Plugins -->
        <script src="assets/js/plugins/slick/slick.min.js"></script>
        <script src="assets/js/plugins/chartjs/Chart.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/base_pages_dashboard.js"></script>
        <script>
            $(function () {
                // Init page helpers (Slick Slider plugin)
                App.initHelpers('slick');
            });
        </script>
    </body>
</html>