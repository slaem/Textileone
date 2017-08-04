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

        <title>Login Account</title>

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

		<!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" href="assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
        <link rel="stylesheet" href="assets/js/plugins/select2/select2.min.css">
        <link rel="stylesheet" href="assets/js/plugins/select2/select2-bootstrap.css">
        <link rel="stylesheet" href="assets/js/plugins/dropzonejs/dropzone.min.css">
        <link rel="stylesheet" href="assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css">
        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
		<script src="assets/js/core/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			
			$("#kwd_search").keyup(function(){
				
				if( $(this).val() != "")
				{
					
					$(".my-tables tbody>tr").hide();
					$(".my-tables td:contains-ci('" + $(this).val() + "')").parent("tr").show();
				}
				else
				{
					
					$(".my-tables tbody>tr").show();
				}
			});
		});
		$.extend($.expr[":"], 
		{
			"contains-ci": function(elem, i, match, array) 
			{
				return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
			}
		});
		</script>
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
                                Form User <small></small>
                            </h1>
                        </div>
                        <div class="col-sm-4 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Forms</li>
                                <li><a class="link-effect" href="">Form User</a></li>
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
                                    <h3 class="block-title">Data User Website & Apps</h3>
                                </div>
                                <div class="block-content block-content-narrow">
                                    <form class="form-horizontal push-10-t" method="post">
									
										<div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material">
													<select required name="id_domain" class="js-select2 form-control">
														<option value="">...</option>
															<?php
																$q = "SELECT * FROM domain ";
																$res = mysql_query($q);
																while($row = mysql_fetch_array($res)){
															?>
															   <option value="<?php echo $row['id_domain']; ?>">
															   <?php echo $row['nama_domain']; ?>
															   </option>
															<?php
																}
															?>
													</select>
                                                    <label>Domain Name</label>
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material">
                                                    <input class="form-control" type="text" name="link_backend" placeholder="">
                                                    <label>Link BackEnd</label>
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material">
                                                    <input class="form-control" type="text" name="user_email" placeholder="">
                                                    <label>User Email</label>
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material">
                                                    <select name="id_role" class="form-control">
														<option value="">...</option>
															<?php
																$q = "SELECT * FROM website_role ";
																$res = mysql_query($q);
																while($row = mysql_fetch_array($res)){
															?>
															   <option value="<?php echo $row['id_role']; ?>">
															   <?php echo $row['role']; ?>
															   </option>
															<?php
																}
															?>
													</select>
                                                    <label>User Role</label>
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group">
											<div class="col-sm-12">
                                                <div class="form-material">
                                                    <input class="form-control" type="text" name="user_web" placeholder="">
                                                    <label>Username</label>
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material">
                                                    <input class="form-control" type="text" name="pass_web" placeholder="">
                                                    <label>Password</label>
                                                </div>
                                            </div>
                                        </div>
										
										
										
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-sm btn-success" type="submit" name="save">Save User</button>
                                            </div>
                                        </div>
                                    </form>
									<?php
									if(isset($_POST['save'])){
										$sql->save("website_user"," '','".$_POST['id_domain']."','".$_POST['link_backend']."','".$_POST['user_email']."','".$_POST['id_role']."','".$_POST['user_web']."'
											,'".$_POST['pass_web']."' ");
											
											if ($sql >0 ) 
											{
												echo "<script>alert('Berhasil Tambah Website');</script>"; 
												echo "<script>document.location.href='website-user'</script>";  
												}
											else
											{
												 echo "<script>alert('Failed Saving Data');</script>";
												 echo "<script>document.location.href='website-user';</script>";
											}
									} ?>
									
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
        
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/jquery.placeholder.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/app.js"></script>
		
		<!-- Page JS Plugins -->
        <script src="assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="assets/js/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
        <script src="assets/js/plugins/select2/select2.full.min.js"></script>
        <script src="assets/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
        <script src="assets/js/plugins/dropzonejs/dropzone.min.js"></script>
        <script src="assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>

        <!-- Page JS Code -->
        <script>
            $(function () {
                // Init page helpers (BS Datepicker + BS Colorpicker + Select2 + Masked Input + Tags Inputs plugins)
                App.initHelpers(['datepicker', 'colorpicker', 'select2', 'masked-inputs', 'tags-inputs']);
            });
        </script>
		
    </body>
</html>