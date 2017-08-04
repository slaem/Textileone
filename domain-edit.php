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

        <title>Domain</title>

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
                                Form Domain <small></small>
                            </h1>
                        </div>
                        <div class="col-sm-4 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Forms</li>
                                <li><a class="link-effect" href="">Form Domain</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content content-narrow">
                    <!-- Material Design -->
                    <h2 class="content-heading"></h2>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Static Labels -->
                            <div class="block">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button"><i class="si si-settings"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">Data Domain</h3>
                                </div>
                                <div class="block-content block-content-narrow">
                                    <form class="form-horizontal push-10-t" method="post">
										<?php                                        
										$id_domain = $_GET['id_domain'];
										$sql = "select * from domain where id_domain='$id_domain' ";
										$exe = mysql_query($sql);
										$row = mysql_fetch_array($exe);                            
										?>  
										<div class="form-group" hidden="">
											<input hidden="" type="text" value="<?php echo $row['id_domain'] ?>" class="form-control" name="id_domain" >
										</div>
										<div class="form-group">
                                            <div class="col-sm-4">
                                                <div class="form-material">
                                                    <input required class="form-control" type="text" name="nama_domain" value="<?php echo $row['nama_domain'] ?>" placeholder="">
                                                    <label>Nama Domain</label>
                                                </div>
                                            </div>
											<div class="col-sm-4">
                                                <div class="form-material">
                                                    <input class="form-control" type="text" name="domain_hosted" value="<?php echo $row['domain_hosted'] ?>" placeholder="">
                                                    <label>Domain Hosted</label>
                                                </div>
                                            </div>
											<div class="col-sm-4">
                                                <div class="form-material">
                                                    <input class="form-control" type="text" name="nsname_to" value="<?php echo $row['nsname_to'] ?>" placeholder="">
                                                    <label>NS Name To</label>
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <div class="col-sm-6">
                                                <div class="form-material">
                                                    <input class="form-control" type="date" name="tgl_register" value="<?php echo $row['tgl_register'] ?>" placeholder="">
                                                    <label>Tanggal Register</label>
                                                </div>
                                            </div>
											<div class="col-sm-6">
                                                <div class="form-material">
                                                    <input class="form-control" type="date" name="tgl_perpanjang" value="<?php echo $row['tgl_perpanjang'] ?>" placeholder="">
                                                    <label>Tanggal Perpanjang</label>
                                                </div>
                                            </div>
                                        </div>
										
										
										<div class="form-group">
                                            <div class="col-sm-6">
                                                <div class="form-material">
													<select name="status" class="form-control"  >
														<option>...</option>
														<?php 
															$statusx= $row['status'];
															$q = ' SELECT * FROM status ';
															$res = mysql_query($q);
															while($rows = mysql_fetch_array($res)){
																if($rows['status'] ==  $statusx){
																 echo '<option value="'.$rows['status'].'" selected="selected">'.$rows['status'].'</option>';
																		   }else{
																	   echo '<option value="'.$rows['status'].'">'.$rows['status'].'</option>';
																		   }
																		}
														?>
													</select>
                                                    <label>Status Domain</label>
                                                </div>
                                            </div>
											<div class="col-sm-6">
                                                <div class="form-material">
													<select name="id_client" class="form-control"  >
														<option>...</option>
														<?php 
															$id_client= $row['id_client'];
															$q = ' SELECT * FROM client ';
															$res = mysql_query($q);
															while($rows = mysql_fetch_array($res)){
																if($rows['id_client'] ==  $id_client){
																 echo '<option value="'.$rows['id_client'].'" selected="selected">'.$rows['nama_client'].'</option>';
																		   }else{
																	   echo '<option value="'.$rows['id_client'].'">'.$rows['nama_client'].'</option>';
																		   }
																		}
														?>
													</select>
                                                    <label>Nama Client</label>
                                                </div>
                                            </div>
                                        </div>
										
										
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-sm btn-success" type="submit" name="update">Update Domain</button>
                                            </div>
                                        </div>
                                    </form>
									<?php
									if (isset($_POST['update'])){  
									$id_domain = $_POST['id_domain'];          
									$nama_domain = $_POST['nama_domain'];
									$domain_hosted = $_POST['domain_hosted'];	
									$nsname_to = $_POST['nsname_to'];	
									$tgl_register = $_POST['tgl_register'];	
									$tgl_perpanjang = $_POST['tgl_perpanjang'];	
									$status = $_POST['status'];	
									$id_client = $_POST['id_client'];	
									
									$query = "UPDATE domain SET nama_domain='".$nama_domain."', domain_hosted='".$domain_hosted."', nsname_to='".$nsname_to."'
									, tgl_register='".$tgl_register."', tgl_perpanjang='".$tgl_perpanjang."', status='".$status."'
									, id_client='".$id_client."' WHERE id_domain='".$id_domain."'  ";
									$hasil = mysql_query($query);
									if ($hasil >0 ) 
										{
											echo "<script>alert('Data Berhasil Diubah');</script>"; 
											echo "<script>document.location.href='domain.php'</script>";  
											}
										else
										{
											 echo "<script>alert('Gagal Ubah Data Karena Ada Sesuatu yang Salah');</script>";
											 echo "<script>document.location.href='domain.php';</script>";
										}
									}
									?>
                                </div>
                            </div>
                            <!-- END Static Labels -->
                        </div>
						
						
                    </div>
                    <!-- END Material Design -->
				
					
				
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