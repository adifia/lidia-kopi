<?php
$id = $_GET['id'];
include_once "ambildata2.php";
$GLOBALS['page'] = "detail";
$obj = $data;
// var_dump($obj);
$titles = $obj['nama_usaha'];
$nap = $obj['nama_pemilik'];
$alamat = $obj['alamat'];
$hp = $obj['no_hp'];
$tahun = $obj['tahun_berdiri'];
$jenis = $obj['jenis_produk'];
$wilayah = $obj['wilayah_pemasaran'];
$lat = $obj['lat'];
$lng = $obj['lng'];
// foreach ($obj->results as $item) {
// 	$titles .= $item->nama_usaha;
// 	$nap .= $item->nama_pemilik;
// 	$alamat .= $item->alamat;
// 	$hp .= $item->no_hp;
// 	$tahun .= $item->tahun_berdiri;
// 	$jenis .= $item->jenis_produk;
// 	$wilayah .= $item->wilayah_pemasaran;
// 	$lat .= $item->latitude;
// 	$lng .= $item->longitude;
// }
$title = "Detail dan Lokasi : " . $titles;
include_once "header.php"; ?>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyA0wD9Y8Hejzpuu9lrDNdoSGcrho8X4k7k"></script>

<script>
	function initilize() {
		var mylatlng = new google.maps.LatLng(<?php echo $lat ?>, <?php echo $lng ?>);
		var mapOptions = {
			zoom: 10,
			center: mylatlng
		};
		var map = new google.maps.map(document.getElementById('map-canvas'), mapOptions);

		var contentString = '<div id="content">' +
			'<div id="siteNotice">' +
			'</div>' +
			'<h1 id="firstHeading" class="firstHeading"><?php echo $title ?></h1>' +
			'<div id="bodyContent">' +
			'<p><?php echo $alamat ?></p>' +
			'</div>' +
			'</div>';

		var infowindow = new google.maps.Infowindow({
			content: contentString
		});

		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title: 'Maps Info',
			icon: 'Looker16(H:)/kopi.JPEG image'
		});
		google.maps.event.addListenet(marker, 'click', function() {
			infowindow.open(map, marker);
		});
	}

	google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div class="wrapper bgded overlay" style="background-image:url('images/kopi2.jpg');">
	<div id="breadcrumb" class="hoc clear">
		<!-- ################################################################################################ -->
		<h6 class="heading">Detail Data <?php echo $titles ?></h6>
		<ul>
			<li><a href="index.php">Beranda</a></li>
			<li><a href="data.php">Tabel Data Hilirisasi Kopi</a></li>
			<!-- <li><a href="#">Ipsum</a></li> -->
			<li><a href="#"><?php echo $titles ?></a></li>
		</ul>
		<!-- ################################################################################################ -->
	</div>
</div>

<div class="wrapper row2">
	<section class="hoc container clear">
		<div class="row">
			<!-- <div class="col-md-5">
				<div class="panel panel-info panel-dashboard">
					<div class="panel-heading centered">
						<h2 class="panel-title"><strong> - Lokasi - </strong></h4>
					</div>
					<div class="panel-body">
						<div id="map-canvas" style="width:100%;height:380px;background-color:gray;"></div>
					</div>
				</div>
			</div> -->
			<div class="col-md-7">
				<div class="panel panel-info panel-dashboard">
					<div class="panel-heading centered">
						<h2 class="panel-title"><strong>Detail <?php echo $titles ?></strong></h4>
					</div>
					<div class="panel-body">
						<table class="table">
							<thead>
								<tr>
									<th>Item</th>
									<th>Detail</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Nama Usaha</td>
									<td>
										<h4><?php echo $titles ?></h4>
									</td>
								</tr>
								<tr>
									<td>Nama Pemilik</td>
									<td>
										<h4><?php echo $nap ?></h4>
									</td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td>
										<h4><?php echo $alamat ?></h4>
									</td>
								</tr>
								<tr>
									<td>No Hp</td>
									<td>
										<h4><?php echo $hp ?></h4>
									</td>
								</tr>
								<tr>
									<td>Tahun Berdiri</td>
									<td>
										<h4><?php echo $tahun ?></h4>
									</td>
								</tr>
								<tr>
									<td>Jenis Produk</td>
									<td>
										<h4><?php echo $jenis ?></h4>
									</td>
								</tr>
								<tr>
									<td>Wilayah Pemasaran</td>
									<td>
										<h4><?php echo $wilayah ?></h4>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>


		</div>
		<!-- <article class="one_third">
			<h6 class="heading">Vel nunc nulla nunc metus tempor vitae eu diam</h6>
			<p>Sed placerat leo nec tincidunt aliquet ipsum mi ultrices magna eu tempor quam dolor eu sem nullam risus turpis rhoncus vel varius consequat laoreet ac neque pellentesque imperdiet sagittis velit vivamus urna ut dictum erat eu massa aliquam nunc urna ornare.</p>
			<p class="btmspace-30">Tincidunt quis posuere id justo aenean velit ipsum tincidunt aliquet lacinia nec pharetra in purus proin auctor justo ac sem.</p>
			<p><a class="btn" href="#">Donec rutrum justo at <i class="fas fa-angle-right"></i></a></p>
		</article> -->
		<!-- <figure class="one_third"><a class="imgover" href="#"><img src="images/demo/348x420.png" alt=""></a></figure> -->
		<!-- <figure class="one_third"><a class="imgover" href="#"><img src="images/kopi2.jpg" alt=""></a></figure> -->
	</section>
</div>
<?php include_once "footer.php"; ?>