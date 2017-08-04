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
				<form class="form-horizontal push-10-t" method="post">
				<?php                                        
				$id_portfolio = $_GET['id_portfolio'];
				$sql = "select * from portfolio where id_portfolio='$id_portfolio' ";
				$exe = mysql_query($sql);
				$row = mysql_fetch_array($exe);                            
				?>  
                <div class="bg-primary-dark" style="background:url('assets/img/photos/dashimg.jpg');">
                    <section class="content content-full content-boxed">
                        <!-- Section Content -->
                        <div class="push-50-t push-50 text-center" >
                            <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown"><?php echo $row['judul_portfolio']; ?></h1>
                        </div>
                        <!-- END Section Content -->
                    </section>
                </div>
                <!-- END Hero Content -->

                <!-- About Info -->
                <div class="bg-white">
                    <section class="content content-boxed">
                        <!-- Section Content -->
                        <div class="row items-push push-20-t nice-copy">
                            <div class="col-md-8" style="text-align:justify;">
								<?php echo $row['deskripsi']; ?>
                            </div>
                            <div class="col-md-4">
                                <!-- Company Timeline -->
                                <div class="block block-transparent">
                                    <div class="block-content">
                                        <ul class="list list-timeline pull-t">
                                            <li class="visibility-hidden" data-toggle="appear" data-class="animated fadeInRight">
                                                <i class="si si-bulb list-timeline-icon bg-warning"></i>
                                                <div class="list-timeline-content">
                                                    <p class="font-w600">Years</p>
                                                    <p class="font-s13"><?php echo $row['year']; ?></p>
                                                </div>
                                            </li>
                                            <li class="visibility-hidden" data-toggle="appear" data-timeout="100" data-class="animated fadeInRight">
                                                <i class="si si-speedometer list-timeline-icon bg-city"></i>
                                                <div class="list-timeline-content">
                                                    <p class="font-w600">Authors</p>
                                                    <p class="font-s13"><?php echo $row['authors']; ?></p>
                                                </div>
                                            </li>
                                            <li class="visibility-hidden" data-toggle="appear" data-timeout="200" data-class="animated fadeInRight">
                                                <i class="si si-briefcase list-timeline-icon bg-smooth"></i>
                                                <div class="list-timeline-content">
                                                    <p class="font-w600">Link Portfolio</p>
                                                    <p class="font-s13"><a href="<?php echo $row['link']; ?>"><?php echo $row['link']; ?></a></p>
                                                </div>
                                            </li>
                                            <li class="visibility-hidden" data-toggle="appear" data-timeout="400" data-class="animated fadeInRight">
                                                <div>
													<img style="max-width: 100%;" src="upload/image/portfolio/<?php echo $row['idf_pic']; ?>.jpg" />
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- END Company Timeline -->
                            </div>
                        </div>
                        <!-- END Section Content -->
                    </section>
                </div>
                <!-- END About Info -->
				</form>

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