<?php
$id = $_GET['id'];
include_once "ambildata11.php";
$obj = json_decode($data);
$titles="";
$nap="";
$alamat="";
$hp="";
$tahun="";
$jenis="";
$wilayah="";
$lat="";
$lng="";
foreach($obj->results as $item){
	$titles.=$item->nama_usaha;
	$nap.=$item->nama_pemilik;
	$alamat.=$item->alamat;
	$hp.=$item->no_hp;
	$tahun.=$item->tahun_berdiri;
	$jenis.=$item->jenis_produk;
	$wilayah.=$item->wilayah_pemasaran;
	$lat.=$item->latitude;
	$lng.=$item->longitude;
}
$title = "Detail dan Lokasi :".$titles;
include_once "header1.php"; ?>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyA0wD9Y8Hejzpuu9lrDNdoSGcrho8X4k7k"></script>

<script>

function initilize() {
	var mylatlng = new google.maps.LatLng(<?php echo $lat ?>,<?php echo lng ?>);
	var mapOptions = {
	zoom:10,
	center: mylatlng
	};
	var map= new google.maps.map(document.getElementById('map-canvas'), mapOptions);
	
	var contentString = '<div id="content">'+
		'<div id="siteNotice">'+
		'</div>'+
		'<h1 id="firstHeading" class="firstHeading"><?php echo $title ?></h1>'+
		'<div id="bodyContent">'+
		'<p><?php echo $alamat ?></p>'+
		'</div>'+
		'</div>';
		
	var infowindow = new google.maps.Infowindow({
		content: contentString
	});
	
	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		title: 'Maps Info',
		icon: 'htdocs/kopi.JPEG image'
	});
	google.maps.event.addListenet(marker, 'click', function() {
		infowindow.open(map,marker);
	});
}

google.maps.event.addDomListener(window, 'load', initialize);

</script>
<div class="row">
<div class="col-md-5">
	<div class="panel panel-info panel-dashboard">
		<div class="panel-heading centered">
			<h2 class="panel-title"><strong> - Lokasi - </strong></h4>
		</div>
		<div class="panel-body">
			<div id="map-canvas" style="width:100%;height:380px;"></div>
		</div>
	</div>
</div>
<div class="col-md-7">
	<div class="panel panel-info panel-dashboard">
		<div class="panel-heading centered">
			<h2 class="panel-title"><strong> - Detail - </strong></h4>
		</div>
		<div class="panel-body">
			<table class="table">
				<tr>
					<th>Item</th>
					<th>Detail</th>
				</tr>
				<tr>
					<td>Nama Usaha</td>
					<td><h4><?php echo $titles ?></h4></td>
				</tr>
				<tr>
					<td>Nama Pemilik</td>
					<td><h4><?php echo $nap ?></h4></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><h4><?php echo $alamat ?></h4></td>
				</tr>
				<tr>
					<td>No Hp</td>
					<td><h4><?php echo $hp ?></h4></td>
				</tr>
				<tr>
					<td>Tahun Berdiri</td>
					<td><h4><?php echo $tahun ?></h4></td>
				</tr>
				<tr>
					<td>Jenis Produk</td>
					<td><h4><?php echo $jenis ?></h4></td>
				</tr>
				<tr>
					<td>Wilayah Pemasaran</td>
					<td><h4><?php echo $Wilayah ?></h4></td>
				</tr>
				</table>
				</div>
				</div>
			</div>
			
			
			</div>
		</div>
	</div>
	<?php include_once "footer1.php"; ?>

 

