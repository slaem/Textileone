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

        <title>Portfolio</title>

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
            'header-navbar-transparent'  Enables a transparent header (if also fixed, it will get a solid dark background color on scrolling)
        -->
        <div id="page-container" class="sidebar-l sidebar-mini sidebar-o side-scroll header-navbar-fixed header-navbar-transparent">
            <!-- Sidebar -->
            <?php include "sidebar-front.php"; ?>
            <!-- END Sidebar -->

            <!-- Header -->
            <?php include "header-front.php"; ?>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Hero Content -->
                <div class="bg-primary-dark" style="background:url('assets/img/photos/dashimg.jpg');">
                    <section class="content content-full content-boxed">
                        <!-- Section Content -->
                        <div class="push-100-t push-50 text-center" >
                            <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Company Profile, E-Commerce, Mobile Application, Web Application, Web Design.</h1>
                            <h2 class="h5 text-white-op visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">A FEW OF FAVORITE WEBSITE PROJECTS</h2>
                        </div>
                        <!-- END Section Content -->
                    </section>
                </div>
                <!-- END Hero Content -->

                <!-- Team -->
                <div class="bg-gray-lighter">
                    <section class="content content-boxed">
                        <!-- Section Content -->
                        <div class="push-50-t push-20">
                            
							<div class="row items-push-2x">
                                
								<?php
									$sql = "select * from portfolio ORDER BY id_portfolio ASC ";
											$exe = mysql_query($sql);									
											$noUrut = 0;									
											while($row = mysql_fetch_array($exe))
											{	                       
								?>
								<div class="col-md-4 visibility-hidden" data-toggle="appear" data-class="animated zoomIn">
                                    <div class="block">
                                        <div class="block-header">
                                            <ul class="block-options">
                                                <li>
                                                    <a href="<?php echo $row['link']; ?>"><button type="button" data-toggle="tooltip" title="View Link"><i class="si si-social-dribbble"></i></button></a>
                                                </li>
												<li>
                                                    <a href="portfolio-view?id_portfolio=<?php echo $row['id_portfolio']; ?>"><button type="button" data-toggle="tooltip" title="See More"><i class="si si-book-open"></i></button></a>
                                                </li>
                                            </ul>
                                            <h3 class="block-title"><?php echo $row['judul_portfolio']; ?></h3></br>
											<p style="color:#3348b7; font-size:13px;">
												<?php
													$c_company = $row['c_company'];
													$c_ecommerce = $row['c_ecommerce'];
													$c_mobileapp = $row['c_mobileapp'];
													$c_webapp = $row['c_webapp'];
													$c_webdesign = $row['c_webdesign'];
												
													echo "<span style='text-decoration: underline;'>$c_company</span> 
													<span style='text-decoration: underline;'>$c_ecommerce</span> 
													<span style='text-decoration: underline;'>$c_mobileapp</span> 
													<span style='text-decoration: underline;'>$c_webapp</span> 
													<span style='text-decoration: underline;'>$c_webdesign</span> ";
																									
												?>
											</p>
                                        </div>
                                        <div class="block-content block-content-full text-center bg-image" style="height:200px; background-image: url('upload/image/portfolio/<?php echo $row['idf_pic']; ?>.jpg');"></div>
                                        <div class="block-content"><p><?php echo $row['excerp']; ?></p></div>
										
										
                                    </div>
                                </div>
								<?php } ?>
                            </div>							
                        </div>
                        <!-- END Section Content -->
                    </section>
                </div>
                <!-- END Team -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <?php include "footer.php"; ?>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

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

        <!-- Page JS Code -->
        <script>
            $(function () {
                // Init page helpers (Appear plugin)
                App.initHelpers('appear');
            });
        </script>
    </body>
</html>