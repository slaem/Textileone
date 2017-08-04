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
                                Form Client <small></small>
                            </h1>
                        </div>
                        <div class="col-sm-4 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Forms</li>
                                <li><a class="link-effect" href="">Form Client</a></li>
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
                                    <h3 class="block-title">Data Client</h3>
                                </div>
                                <div class="block-content block-content-narrow">
                                    <form class="form-horizontal push-10-t" method="post">
										<?php                                        
										$id_client = $_GET['id_client'];
										$sql = "select * from client where id_client='$id_client' ";
										$exe = mysql_query($sql);
										$row = mysql_fetch_array($exe);                            
										?>  
										<div class="form-group" hidden="">
											<input hidden="" type="text" value="<?php echo $row['id_client'] ?>" class="form-control" name="id_client" >
										</div>
										<div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material">
                                                    <input required class="form-control" type="text" name="nama_client" value="<?php echo $row['nama_client'] ?>" placeholder="">
                                                    <label>Nama Client</label>
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group">
											<div class="col-sm-12">
                                                <div class="form-material">
                                                    <input class="form-control" type="text" name="no_hp" value="<?php echo $row['no_hp'] ?>" placeholder="">
                                                    <label>No HP Client</label>
                                                </div>
                                            </div>
										</div>	
										<div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material">
                                                    <input class="form-control" type="text" name="nama_perusahaan" value="<?php echo $row['nama_perusahaan'] ?>" placeholder="">
                                                    <label>Nama Perusahaan</label>
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group">
											<div class="col-sm-12">
                                                <div class="form-material">
                                                    <input class="form-control" type="text" name="email_client" value="<?php echo $row['email_client'] ?>" placeholder="">
                                                    <label>Email Client</label>
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material">
                                                    <input class="form-control" type="text" name="alamat" value="<?php echo $row['alamat'] ?>" placeholder="">
                                                    <label>Alamat Client</label>
                                                </div>
                                            </div>
                                        </div>
										
										
										
										
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-sm btn-success" type="submit" name="update">Update Client</button>
                                            </div>
                                        </div>
                                    </form>
									<?php
									if (isset($_POST['update'])){  
									$id_client = $_POST['id_client'];          
									$nama_client = $_POST['nama_client'];
									$no_hp = $_POST['no_hp'];	
									$nama_perusahaan = $_POST['nama_perusahaan'];	
									$email_client = $_POST['email_client'];	
									$alamat = $_POST['alamat'];	
									
									$query = "UPDATE client SET nama_client='".$nama_client."', no_hp='".$no_hp."', nama_perusahaan='".$nama_perusahaan."', email_client='".$email_client."', alamat='".$alamat."' WHERE id_client='".$id_client."'  ";
									$hasil = mysql_query($query);
									if ($hasil >0 ) 
										{
											echo "<script>alert('Data Berhasil Diubah');</script>"; 
											echo "<script>document.location.href='client.php'</script>";  
											}
										else
										{
											 echo "<script>alert('Gagal Ubah Data Karena Ada Sesuatu yang Salah');</script>";
											 echo "<script>document.location.href='client.php';</script>";
										}
									}
									?>
									
                                </div>
                            </div>
                            <!-- END Static Labels -->
                        </div>
						
						
                    </div>
                    <!-- END Material Design -->
				
					<div class="row">
						<div class="col-md-12">
							<div class="block">
								<div class="block-header">
									<div class="block-options">
										<code>.Client Data</code>
									</div>
									<h3 class="block-title">Client Data</h3>
								</div>
								<div class="block-content">
									<table class="table table-condensed">
										<thead>
											<tr>
												<th class="text-center">#</th>
												<th>Nama Client</th>
												<th class="text-center">No HP Client</th>
												<th class="hidden-xs">Nama Perusahaan</th>
												<th class="hidden-xs">Email Client</th>
												<th class="hidden-xs">Alamat</th>
												<th class="text-center">Actions</th>
											</tr>
										</thead>
										<?php
											$sql = "select * from client ";
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
												<td><?php echo $row['nama_client']; ?></td>
												<td class="text-center"><?php echo $row['no_hp']; ?></td>
												<td class="hidden-xs"><?php echo $row['nama_perusahaan']; ?></td>
												<td class="hidden-xs">
													<span><?php echo $row['email_client']; ?></span>
												</td>
												<td class="hidden-xs"><?php echo $row['alamat']; ?></td>
												<td class="text-center">
													<div class="btn-group">
														<a href="client-edit.php?id_client=<?php echo $row['id_client']; ?>">
														<button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button></a>
														<button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
													</div>
												</td>
											</tr>
										</tbody>
										<?php }}?>
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