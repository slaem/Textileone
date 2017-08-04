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
        <link rel="stylesheet" href="assets/js/plugins/summernote/summernote.min.css">
        <link rel="stylesheet" href="assets/js/plugins/summernote/summernote-bs3.min.css">
		
        <!-- OneUI CSS framework -->
        <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">

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
                                Form Portfolio <small></small>
                            </h1>
                        </div>
                        <div class="col-sm-4 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Forms</li>
                                <li><a class="link-effect" href="">Form Portfolio</a></li>
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
                                    <h3 class="block-title">New Portfolio</h3>
                                </div>
								
								<?php
								$pic = pic;
								$query5 = "SELECT MAX(idf_pic) as maxID5 FROM portfolio WHERE idf_pic LIKE '$pic%'";
								$hasil5 = mysql_query($query5);
								$data5  = mysql_fetch_array($hasil5);
								$idMax5 = $data5['maxID5'];
								$noUrut5 = substr($idMax5, 3, 9);
								$noUrut5++;
								$newID5 = $pic . sprintf("%09s", $noUrut5);
								if (empty($idMax5)){
									$newID5 = $pic.'000000001';	
								}
								$row5 = mysql_fetch_array(mysql_query('SELECT * FROM portfolio WHERE idf_pic = "'.$pic.'"'));
								?>
								
                                <div class="block-content block-content-narrow">
                                    <form class="form-horizontal push-10-t" enctype="multipart/form-data" method="post">
									
										<div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material">
                                                    <input required class="form-control" type="text" name="judul_portfolio" placeholder="">
                                                    <label>Judul Portfolio <span style="color:#F00; font-size:11px;">*</span></label>
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <div class="col-sm-12">
												<label>Deskripsi</label>
												<textarea class="js-summernote" name="deskripsi"></textarea>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-12">
                                                <div class="form-material">
                                                    <label>Type Portfolio</label>
													<br />
													<p><input type="checkbox" name="c_company" value="Company Profile"> Company Profile</p>
													<p><input type="checkbox" name="c_ecommerce" value="E-Commerce"> E-Commerce</p>
													<p><input type="checkbox" name="c_mobileapp" value="Mobile Application"> Mobile Application</p>
													<p><input type="checkbox" name="c_webapp" value="Web Application"> Web Application</p>
													<p><input type="checkbox" name="c_webdesign" value="Web Design"> Web Design</p>
                                                </div>
                                            </div>
										</div>	
										<div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material">
                                                    <input class="form-control" type="text" name="year" placeholder="">
                                                    <label>Tahun</label>
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group">
											<div class="col-sm-12">
                                                <div class="form-material">
                                                    <input class="form-control" type="text" name="authors" placeholder="">
                                                    <label>Authors</label>
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material">
                                                    <input class="form-control" type="text" name="link" placeholder="">
                                                    <label>External Link</label>
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material">
                                                    <input class="form-control" type="text" name="excerp" placeholder="">
                                                    <label>Excerp</label>
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material">
													<div hidden=""><input name="idf_pic" type="text" value="<?php echo $newID5; ?>" placeholder=""></div>
                                                    <input class="form-control" type="file" name="f_pic" placeholder="">
                                                    <label>Attachment <span style="color:#F00; font-size:11px;">* max file size = 2 mb</span></label>
                                                </div>
                                            </div>
                                        </div>
										
										
										
										
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-sm btn-success" type="submit" name="save">Save Portfolio</button>
                                            </div>
                                        </div>
                                    </form>
									<?php
									if(isset($_POST['save'])){
										
										if ( $_FILES['f_pic']['size']<2000000 ) 
										
										{
										
										$alamat = $_FILES['f_pic']['tmp_name'];
										$namaFile = $_FILES['f_pic']['name'];
										move_uploaded_file($alamat,'upload/image/portfolio/'.$_POST['idf_pic'].".jpg");
										
										$sql->save("portfolio"," '','".$_POST['judul_portfolio']."','".$_POST['c_company']."','".$_POST['c_ecommerce']."'
										,'".$_POST['c_mobileapp']."','".$_POST['c_webapp']."','".$_POST['c_webdesign']."','".$_POST['year']."','".$_POST['authors']."'
											,'".$_POST['link']."','".$_POST['excerp']."','".$_POST['idf_pic']."','".$namaFile."','".$_POST['deskripsi']."' ");
											
											if ($sql >0 ) 
											{
												echo "<script>alert('Berhasil Tambah Portfolio');</script>"; 
												echo "<script>document.location.href='portfolio'</script>";  
										} }
											else
											{
												 echo "<script>alert('Failed Saving Data');</script>";
												 echo "<script>document.location.href='portfolio';</script>";
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
        <script src="assets/js/plugins/summernote/summernote.min.js"></script>
        <script src="assets/js/plugins/ckeditor/ckeditor.js"></script>

        <!-- Page JS Code -->
        <script>
            $(function () {
                // Init page helpers (Summernote + CKEditor plugins)
                App.initHelpers(['summernote', 'ckeditor']);
            });
        </script>
		
    </body>
</html>