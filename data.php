<?php
$title = "Data Hilirisasi Produk Kopi Arabika Ijen Raung";
$GLOBALS['page'] = "halaman";
include_once "header.php";
include_once "ambildata.php";
// include_once "koneksi.php"; 
?>
<div class="wrapper bgded overlay" style="background-image:url('images/kopi2.jpg');">
	<div id="breadcrumb" class="hoc clear">
		<!-- ################################################################################################ -->
		<h6 class="heading">Tabel Data Hilirisasi Kopi</h6>
		<ul>
			<li><a href="index.php">Beranda</a></li>
			<!-- <li><a href="#">Lorem</a></li>
			<li><a href="#">Ipsum</a></li> -->
			<li><a href="#">Tabel Data Hilirisasi Kopi</a></li>
		</ul>
		<!-- ################################################################################################ -->
	</div>
</div>
<div class="wrapper row3">
	<main class="hoc container clear">
		<!-- main body -->
		<!-- ################################################################################################ -->
		<div class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-info panel-dashboard">
						<div class="panel-heading centered">
							<h2 class="panel-title"><strong>Data Hilirisasi Produk Kopi Arabika Ijen Raung </strong></h2>
						</div>
						<div class="panel-body">
							<table class="table table-bordered table-striped table-admin">
								<thead>
									<tr>
										<th width="5%">No</th>
										<th width="25%">Nama Usaha</th>
										<th width="25%">Nama Pemilik</th>
										<th width="10%">No Hp</th>
										<th width="30%">Alamat</th>
										<th width="10%">Tahun Berdiri</th>
										<th width="30%">Jenis Produk</th>
										<th width="25%">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									if ($data != null) {
										foreach ($data as $item) {
									?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $item['nama_usaha']; ?></td>
												<td><?php echo $item['nama_pemilik']; ?></td>
												<td><?php echo $item['no_hp']; ?></td>
												<td><?php echo $item['alamat']; ?></td>
												<td><?php echo $item['tahun_berdiri']; ?></td>
												<td><?php echo $item['jenis_produk']; ?></td>
												<td class="ctr">
													<div class="btn-group">
														<a href="detail.php?id=<?php echo $item['id_perusahaan']; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
															<!-- <i class="fa fa-map-marker"> </i>  -->
															Detail
														</a>&nbsp;
													</div>
												</td>
											</tr>
									<?php $no++;
										}
									} else {
										echo "data tidak ada.";
									} ?>

								</tbody>
							</table>
						</div>
						<div class="wrapper row3">
							<main class="hoc clear">
								<div class="content">
									<img class="imgl borderedbox inspace-5" src="images/kopi.jpg" alt="kopi" style="width: 200px;">
									<p class="justified"> Sistem informasi ini memuat tentang data hilirisasi produk kopi ijen raung yang berada di Kabupaten Bondowoso. data tersebut berisikan tentang profil usaha, seperti nama usaha, nama pemilik, no Hp, alamat, tahun berdiri, wilayah pemasaran, dan jenis produk yang dihasilkan.</p>
									<p class="justified"> Kopi arabika ijen raung adalah kopi jenis arabika yang ditanam pada ketinggian 1000 Mdpl dan banyak ditemukan di lereng gunung ijen dan raung daerah Kabupaten Bondowoso. Daerah yang paling banyak menekuni usaha kopi ini adalah Desa Sukosari dan Sumberwringin. Kopi arabika yang dihasilkan diolah menjadi beberapa jenis produk, seperti kopi bubuk, roasbean, greenbean, dll. Jenis produk tersebut didistribusikan ke berbagai daerah, seperti Surabaya, Malang, Jakarta, Medan, Jawa Tengah, bahkan sampai luar negeri.</p>
								</div>
								<div class="clear"></div>
							</main>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</div>

<?php include_once "footer.php" ?>