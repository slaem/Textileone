<?php 
session_start(); 
include "koneksi.php"; 
error_reporting('E_NONE');
$sql = new sql();
if(empty($_SESSION['user'])){
	echo "<script>document.location.href='index.php';</script>";
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="slick, flat, dashboard, bootstrap, admin, template, theme, responsive, fluid, retina">
    <link rel="shortcut icon" href="javascript:;" type="image/png">

    <title>B7 Application</title>

    <!--right slidebar-->
    <link href="css/slidebars.css" rel="stylesheet">

    <!--switchery-->
    <link href="js/switchery/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />

    <!--bootstrap-fileinput-master-->
    <link rel="stylesheet" type="text/css" href="js/bootstrap-fileinput-master/css/fileinput.css" />

    <!--common style-->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="sticky-header">

    <section>
        <!-- sidebar left start-->
        <? include "sidebar.php";  ?>
        <!-- sidebar left end-->

        <!-- body content start-->
        <div class="body-content" style="min-height: 1000px;">

            <!-- header section start-->
            <? include "header.php";  ?>
            <!-- header section end-->

            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                    Form Data Transaksi B7
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Form</a></li>
                        <li class="active">Data Transaksi B7</li>
                    </ol>
                </div>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Input Transaksi B7
                        </header>
                        <div class="panel-body">
							
							<?php                                 
							
							$jenis = Trx;
							
							$query = "SELECT MAX(kode_trx) as maxID FROM transaksi WHERE kode_trx LIKE '$jenis%'";
							//echo $query;
							$hasil = mysql_query($query);
							$data  = mysql_fetch_array($hasil);
							
							$idMax = $data['maxID'];
							$noUrut = substr($idMax, 3, 5);
							$noUrut++;
							$newID = $jenis . sprintf("%05s", $noUrut);
							//echo $noUrut;
							if (empty($idMax)){
								$newID = $jenis.'00001';	
							}
							
							$row = mysql_fetch_array(mysql_query('SELECT * FROM transaksi WHERE kode_trx = "'.$jenis.'"'));
							?>
							
                            <form role="form" method="post">
							
								<div class="row">
									<div class="col-lg-6">
										<label>Kode Transaksi</label>
										<input type="text" name="kode_trx" class="form-control" value="<?php echo $newID; ?>" 
										placeholder="" required readonly />
									</div>	
									<div class="col-lg-6">
										<label for="">No Invoice <span style="color:red;">*</span></label>
										<input type="text" class="form-control" name="no_invoice" placeholder="" required>
									</div>
								</div>
                                <div class="row">
									<div class="col-lg-6">
										<label for="">Tanggal <span style="color:red;">*</span></label>
										<input type="date" class="form-control" name="tanggal" id="" placeholder="" required>
									</div>
									<div class="col-lg-6">
										<label for="">Nama Peminjam</label>
										<input type="text" class="form-control" name="nama" placeholder="">
									</div>
                                </div>
								<div class="row">
									<div class="col-lg-6">
										<label for="">Nama Vendor</label>
										<input type="text" class="form-control" name="vendor" placeholder="">
									</div>
									<div class="col-lg-6">
										<label for="">Alat Vendor</label>
										<input type="text" class="form-control" name="alat_vendor" placeholder="">
									</div>
                                </div>
								<div class="row" hidden="">
									<label for="">Status</label>
									<input type="text" class="form-control" name="status" placeholder="" value="belum">
                                </div>
								<br />
								
								<div class="row">
									
									<p align="center"><button type="button" name="add" class="btn btn-info" onClick="added();">
									<i class="icon-plus">&nbsp;&nbsp;Add</i></button></p>
									
									<table class="table table-hover testing">
										<thead>
											<tr>
												<th>No</th>
												<th>Alat B7</th>
												<th>Harga</th>
												<th>Qty</th>
												<th>Sewa</th>
												<th>Total</th>
												<th>Action</th>
											</tr>
										</thead>
		   
										<tbody>
											<tr id="rows_1">
												<td id="no_1">1</td>
												<td>
			
												 <select id="id_alat_b7_1" name="id_alat_b7_1" class="form-control" onChange="count_jumlah(1)">
														<option value="">- Pilih -</option>
														<?php
															$q = "SELECT * FROM dataalat WHERE user='".$_SESSION['user']."' ";
															$res = mysql_query($q);
															while($row = mysql_fetch_array($res)){
														?>
														   <option value="<?php echo $row['no']; ?>">
														   <?php echo //$row['kode'].'&nbsp;&nbsp;&nbsp;'.$row['nama_ktgr'].'&nbsp;&nbsp;&nbsp;'
														   $row['namaalat'].'&nbsp;&nbsp;&nbsp;'.$row['noseri']; ?>
														   </option>
														<?php
															}
														?>
												 </select>
												</td>
												<td>
												<script>
												function count_jumlah(id){
													var harga=$('#id_alat_b7_'+id+' option:selected').text().split('Rp. '); 
												//	alert("harga=>"+harga[1]);
													var hitung_harga=((typeof(harga[1])==='undefined')?0:harga[1])* $('#qty_'+id).val();
													
												//	alert("hitung_harga=>"+hitung_harga);
													$('#jumlah_'+id).val(hitung_harga);
													var c=0;
													for(var a=1;a<=$('#noUrut').val();a++){
													//	alert('#jumlah_'+a+'=>'+$('#jumlah_'+a).val());
														c+=parseInt($('#jumlah_'+a).val());
													}
													var diskon=(($('#diskon').val()=='')?0:$('#diskon').val());
													$('#total').val(c-parseInt(diskon));
												}
												</script>
												<input class="form-control" type="text" id="harga_1" name="harga_1" placeholder="Harga" />
												</td>
												<td>
												<input type="text" id="qty_1" name="qty_1" class="form-control qty" placeholder="Qty" 
												onKeyPress="count_jumlah(1); cek_brg('#qty_1',$('#kode_brg_1').val(),this.value);" onKeyDown="count_jumlah(1); cek_brg('#qty_1',$('#kode_brg_1').val(),this.value);" onKeyUp="count_jumlah(1);cek_brg('#qty_1',$('#kode_brg_1').val(),this.value); cek_brg('#qty_1',$('#kode_brg_1').val(),this.value);"></td>
												</td>
												<td>
												<input class="form-control" type="text" id="hari_sewa_1" name="hari_sewa_1" placeholder="Hari Sewa" />
												</td>
												<td>
												<input  type="text" id="jumlah_1" name="jumlah_1" class="form-control" 
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
													$("#id_alat_b7_"+a).attr({"id":"id_alat_b7_"+b,"name":"id_alat_b7_"+b,"onChange":"count_jumlah("+b+")"});
													$("#harga_"+a).attr({"id":"harga_"+b,"name":"harga_"+b,"onChange":"count_jumlah("+b+")"});
													$("#qty_"+a).attr({"id":"qty_"+b,"name":"qty_"+b,"onKeyPress":"count_jumlah("+b+")","onKeyUp":
													"count_jumlah("+b+")","onKeyDown":"count_jumlah("+b+")"});
													$("#hari_sewa_"+a).attr({"id":"hari_sewa_"+b,"name":"hari_sewa_"+b,"onChange":"count_jumlah("+b+")"});
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
											  add+="<td><select id=\"id_alat_b7_"+$("#noUrut").val()+"\" name=\"id_alat_b7_"+$("#noUrut").val()+"\" class=\"form-control\" onChange=\"count_jumlah("+$("#noUrut").val()+")\">"+
											  $("#id_alat_b7_1").html()+"</select></td>";
											  add+="</td>";
											  
											  add+="<td><input type=\"text\" id=\"harga_"+
											  $("#noUrut").val()+"\" name=\"harga_"+
											  $("#noUrut").val()+"\" onKeyPress=\"count_jumlah("+$("#noUrut").val()+");\" onKeyDown=\" count_jumlah("+$("#noUrut").val()+");\" onKeyUp=\"count_jumlah("+$("#noUrut").val()+");\" class=\"form-control\" placeholder=\"Harga\"></td>";
											  
											  add+="<td><input type=\"text\" id=\"qty_"+
											  $("#noUrut").val()+"\" name=\"qty_"+
											  $("#noUrut").val()+"\" onKeyPress=\"count_jumlah("+$("#noUrut").val()+");\" onKeyDown=\" count_jumlah("+$("#noUrut").val()+");\" onKeyUp=\"count_jumlah("+$("#noUrut").val()+");\" class=\"form-control qty\" placeholder=\"Qty\"></td>";
											  
											  add+="<td><input type=\"text\" id=\"hari_sewa_"+
											  $("#noUrut").val()+"\" name=\"hari_sewa_"+
											  $("#noUrut").val()+"\" onKeyPress=\"count_jumlah("+$("#noUrut").val()+");\" onKeyDown=\" count_jumlah("+$("#noUrut").val()+");\" onKeyUp=\"count_jumlah("+$("#noUrut").val()+");\" class=\"form-control\" placeholder=\"Hari Sewa\"></td>";
											  
											  add+="<td><input id=\"jumlah_"+
											  $("#noUrut").val()+"\" type=\"text\" name=\"jumlah_"+
											  $("#noUrut").val()+"\" class=\"form-control\" placeholder=\"Jumlah\" value=\"0\"></td>";
											  add+="<td>";                                           
													add+="<button onClick=\"delete_this("+$("#noUrut").val()+")\" type=\"button\" id=\"delete_"+$("#noUrut").val()+"\" name=\"delete_"+$("#noUrut").val()+"\" class=\"btn btn-info\">";
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
											  <th><input type="text" id="diskon" name="diskon" class="form-control" placeholder="Diskon Rp" 
											  onKeyUp="count_diskon()" onKeyPress="count_diskon()" onKeyDown="count_diskon()" required >
											  </th>
											  <th></th>
											  <th class="text-right">Total</th>
											  <th colspan="2"><input readonly type="text" id="total" name="total" class="form-control" 
											  placeholder="Total Rp"></th>
										  </tr>                                              
										</tfoot>
									</table>
									
								</div>
								
								<br>
                                <button type="submit" name="save" class="btn btn-info">Simpan Transaksi</button>
                            </form>
							<?php
								if (isset($_POST['save'])){
								$kode_trx = $_POST['kode_trx'];		
								$no_invoice = $_POST['no_invoice'];	
								$tanggal = $_POST['tanggal'];
								$nama = $_POST['nama'];								
								$vendor = $_POST['vendor'];	
								$alat_vendor = $_POST['alat_vendor'];
								$diskon = $_POST['diskon'];		
								$total = $_POST['total'];	
								$status = $_POST['status'];	
								
								$noUrut=$_POST['noUrut'];	
								for($i=1;$i<=$noUrut;$i++){
									$query = "INSERT INTO transaksi VALUES 										
									('','$kode_trx','$no_invoice','$tanggal','$nama','$vendor','".$_POST['id_alat_b7_'.$i]."','$alat_vendor','".$_POST['harga_'.$i]."'
									,'".$_POST['qty_'.$i]."','".$_POST['hari_sewa_'.$i]."'
									,'".$_POST['jumlah_'.$i]."','$total','$diskon','$status', '".$_SESSION['user']."')";
										mysql_fetch_array(mysql_query($query));
																					
										//$query2 = "update barang set 										
										//quantity = quantity - $qty_.$i WHERE kode='$kode_brg.$i' AND user='".$_SESSION['user']."'";
										//mysql_fetch_array(mysql_query($query2));
								}
										echo "<script>alert('Transaksi Sukses Dan Total Transaksi = Rp. ".number_format($total,0,"",",")."')
										</script>";
										echo "<script>document.location.href='transaksi.php'</script>";									
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
                    </section>
                </div>
                <div class="col-lg-6">
                    
                </div>
            </div>
			
            

            </div>
            <!--body wrapper end-->


            <!--footer section start-->
            <? include "footer.php";  ?>
            <!--footer section end-->


            <!-- Right Slidebar start -->
            <? include "right-sidebar.php";  ?>
            <!-- Right Slidebar end -->

        </div>
        <!-- body content end-->
    </section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>

<!--Nice Scroll-->
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>

<!--right slidebar-->
<script src="js/slidebars.min.js"></script>

<!--switchery-->
<script src="js/switchery/switchery.min.js"></script>
<script src="js/switchery/switchery-init.js"></script>

<!--Sparkline Chart-->
<script src="js/sparkline/jquery.sparkline.js"></script>
<script src="js/sparkline/sparkline-init.js"></script>

<!--form validation-->
<script type="text/javascript" src="js/jquery.validate.min.js"></script>

<!--form validation init-->
<script src="js/form-validation-init.js"></script>

<!--bootstrap-fileinput-master-->
<script type="text/javascript" src="js/bootstrap-fileinput-master/js/fileinput.js"></script>
<script type="text/javascript" src="js/file-input-init.js"></script>

<!--common scripts for all pages-->
<script src="js/scripts.js"></script>


</body>
</html>
