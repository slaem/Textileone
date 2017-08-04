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
                                Form Transaksi <br />
								<?php
									$sqlw = mysql_query("select * from transaksi ORDER BY id DESC Limit 0,1 ")or 
									die(mysql_error());
									$roww=mysql_fetch_array($sqlw)
								?> 
								<small><span>Last Invoice : <b><?php echo $roww['no_invoice']; ?></b></span></small>
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
                                    <h3 class="block-title">Data Transaksi</h3>
                                </div>
                                <div class="block-content block-content-narrow">
                                    <form class="form-horizontal push-10-t" method="post">
									
										<div class="form-group">
                                            <div class="col-sm-4">
                                                <div class="form-material">
                                                    <input required class="form-control" type="text" name="no_invoice" placeholder="">
                                                    <label>No Invoice</label>
                                                </div>
                                            </div>
											<div class="col-sm-4">
                                                <div class="form-material">
                                                    <input class="form-control" type="date" name="inv_date" placeholder="">
                                                    <label>Invoice Date</label>
                                                </div>
                                            </div>
											<div class="col-sm-4">
                                                <div class="form-material">
													<select name="id_client" class="form-control">
														<option value="">...</option>
															<?php
																$q = "SELECT * FROM client ";
																$res = mysql_query($q);
																while($row = mysql_fetch_array($res)){
															?>
															   <option value="<?php echo $row['id_client']; ?>">
															   <?php echo $row['nama_client']; ?>
															   </option>
															<?php
																}
															?>
													</select>
                                                    <label>Nama Client</label>
                                                </div>
                                            </div>
                                        </div>
										
										
										<div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material">
                                                    <input class="form-control" type="text" name="keterangan" placeholder="">
                                                    <label>Keterangan</label>
                                                </div>
                                            </div>
                                        </div>
										<div class="row" hidden="">
											<label for="">Status</label>
											<input type="text" class="form-control" name="status" placeholder="" value="Request">
										</div>
										
										<div class="row">
									
											<p align="center"><button type="button" name="add" class="btn btn-warning push-5-r push-10" onClick="added();">
											<i class="icon-plus">&nbsp;&nbsp;Add +</i></button></p>
											
											<table class="table table-condensed testing">
												<thead>
													<tr>
														<th>No</th>
														<th>Deskripsi</th>
														<th>Jumlah</th>
														<th>Action</th>
													</tr>
												</thead>
				   
												<tbody>
													<tr id="rows_1">
														<td id="no_1">1</td>
														<td>
														
														<input size="100" class="form-control" type="text" id="deskripsi_1" name="deskripsi_1" placeholder="Deskripsi"/>
														</td>
														<td>
														<input size="20"  type="text" id="jumlah_1" name="jumlah_1" class="form-control" 
														placeholder="Jumlah" value="0">
														</td>
														<td>                                           
														  <!--  <button type="button" name="delete" class="btn btn-info"> -->
														  <!--    <i class="icon-cut"></i> -->
														  
														  <!--  </button> -->
														</td>                                                    
													</tr>                                    
												</tbody>
												<?php
												echo ("<input type=\"hidden\" id=\"noUrut\" name=\"noUrut\" value=\"1\"/>");										
												?>
					
												<script>
												function delete_this(id){
												//	alert('xxxxxx');
													$('#row_'+id).remove();
													var b=0;
													for(var a=1;a<=$('#noUrut').val();a++){
														if(a!=id){
															b++;
															$("#row_"+a).attr({"id":"row_"+b});
														//	alert("#no_"+a);
															$("#no_"+a).attr({"id":"no_"+b});
															
															$("#deskripsi_"+a).attr({"id":"deskripsi_"+b,"name":"deskripsi_"+b});
															$("#jumlah_"+a).attr({"id":"jumlah_"+b,"name":"jumlah_"+b});
															$("#delete_"+a).attr({"id":"delete_"+b,"name":"delete_"+b,"onClick":"delete_this("+b+")"});													
															$("#no_"+b).html(b);														
														}	
													}
													$('#noUrut').val(parseInt($('#noUrut').val())-1);
													var c=0;
													for(var a=1;a<=$('#noUrut').val();a++){
														c+=parseInt($('#jumlah_'+a).val());
													}
													var diskon=(($('#diskon').val()=='')?0:$('#diskon').val());
													$('#total').val(c-parseInt(diskon));												
												}
												function added(){
													$("#noUrut").val(parseInt($("#noUrut").val())+1);
													var add="<tbody>";
													add+="<tr id='row_"+$("#noUrut").val()+"'>";
													  add+="<td id=\"no_"+$("#noUrut").val()+"\">"+$("#noUrut").val()+"</td>";
													  
													  
													  add+="<td><input type=\"text\" id=\"deskripsi_"+
													  $("#noUrut").val()+"\" name=\"deskripsi_"+
													  $("#noUrut").val()+"\" onKeyPress=\"count_jumlah("+$("#noUrut").val()+");\" onKeyDown=\" count_jumlah("+$("#noUrut").val()+");\" onKeyUp=\"count_jumlah("+$("#noUrut").val()+");\" class=\"form-control\" placeholder=\"Deskripsi\"></td>";
													  
													   add+="<td><input id=\"jumlah_"+
													  $("#noUrut").val()+"\" type=\"text\" name=\"jumlah_"+
													  $("#noUrut").val()+"\" class=\"form-control\" placeholder=\"Jumlah\" value=\"0\"></td>";
													  add+="<td>";                                             
															add+="<button onClick=\"delete_this("+$("#noUrut").val()+")\" type=\"button\" id=\"delete_"+$("#noUrut").val()+"\" name=\"delete_"+$("#noUrut").val()+"\" class=\"btn btn-warning\">";
															add+="<i class=\"fa fa-trash-o\"></i></button>";
													  add+="</td>";                                                    
													add+="</tr>";                                   
													add+="</tbody>";	
													$(".testing").append(add);		
												}
												function count_diskon(){
													var c=0;
													for(var a=1;a<=$('#noUrut').val();a++){
														c+=parseInt($('#jumlah_'+a).val());
													}
													var diskon=(($('#diskon').val()=='')?0:$('#diskon').val());
													$('#total').val(c-parseInt(diskon));												
												}
													
												</script>
												<tfoot>
												  <tr>
													  <th>Diskon <span style="color:red;">*</span></th>
													  <th><input required type="text" id="diskon" name="diskon" class="form-control" placeholder="Diskon Rp" 
													  onKeyUp="count_diskon()" onKeyPress="count_diskon()" onKeyDown="count_diskon()" >
													  </th>
													  
													  <th colspan=""><input readonly type="text" id="total" name="total" class="form-control" 
													  placeholder="Total Rp"></th><th class="text-right">Total</th>
												  </tr>                                              
												</tfoot>
											</table>
											
										</div>
										
										
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-sm btn-success" type="submit" name="save">Save Transaction</button>
                                            </div>
                                        </div>
                                    </form>
									<?php
									if (isset($_POST['save'])){		
									$no_invoice = $_POST['no_invoice'];	
									$inv_date = $_POST['inv_date'];
									$id_client = $_POST['id_client'];	
									$total = $_POST['total'];
									$diskon = $_POST['diskon'];	
									$keterangan = $_POST['keterangan'];
									$status = $_POST['status'];
									
									$noUrut=$_POST['noUrut'];	
									for($i=1;$i<=$noUrut;$i++){
										$query = "INSERT INTO transaksi VALUES 										
										('','$no_invoice','$inv_date','$id_client','".$_POST['deskripsi_'.$i]."','".$_POST['jumlah_'.$i]."'
										,'$total','$diskon','$keterangan','$status' )";
											mysql_fetch_array(mysql_query($query));
																						
											//$query2 = "update barang set 										
											//quantity = quantity - $qty_.$i WHERE kode='$kode_brg.$i' AND user='".$_SESSION['user']."'";
											//mysql_fetch_array(mysql_query($query2));
									}
											echo "<script>alert('Transaksi Sukses Dan Total Transaksi = Rp. ".number_format($total,0,"",",")." ')
											</script>";
											echo "<script>document.location.href='transaksi'</script>";									
									/*

									$query = "INSERT INTO transaksi VALUES 										
										('','$kode_trx','$tgl_beli','$nama_tpq','$kota','$kode_brg','$qty','$diskon','$total')";
										$hasil = mysql_query($query);
										echo "<script>alert('Save New Transaksi Sucsess ^_^')</script>";
										echo "<script>document.location.href='transaksi.php'</script>";
									*/
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
											$sql = "select * from transaksi WHERE status='Request' GROUP BY no_invoice ORDER BY inv_date DESC ";
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
													<form role="form" method="post">
													<span hidden="">
														<input type="text" class="form-control" name="no_invoice" value="<?php echo $row['no_invoice']; ?>">
														<input type="text" class="form-control" name="status" value="Sukses">
													</span>
													<button type="submit" name="update" class="btn btn-success btn-xs btn-mini">Mark As Paid</button>
													</form>
													<?php 
													if (isset($_POST['update'])){  
													$no_invoice = $_POST['no_invoice'];
													$status = $_POST['status'];
													
													$query = "UPDATE transaksi set status='".$status."' WHERE no_invoice='".$no_invoice."'  ";
													$hasil = mysql_query($query);
													if ($hasil >0 ) 
														{
															echo "<script>alert('Terima Kasih.. Status Invoice Sudah Berubah Paid');</script>"; 
															echo "<script>document.location.href='transaksi'</script>";  
															}
														else
														{
															 echo "<script>alert('Gagal Ubah Data Karena Ada Kesalahan');</script>";
															 echo "<script>document.location.href='transaksi';</script>";
														}
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