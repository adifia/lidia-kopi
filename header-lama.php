<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/datatable-bootstrap.css" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<!-- mengubah ikon di title bar -->
	<link rel="icon" href="kopi.jpg" type="image/x-icon" />
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="tengah">
				<div class="head-depan tengah">
					<div class="row">
						<div class="col-md-1">
							<img class="img-responsive margin-b10" src="logo-unej.png" width="100" height="100" alt="Looker16(H:)" />
						</div>
						<div class="col-md-11">
							<h1 class="judul-head">Sistem Informasi Hilirisasi Produk Kopi Arabika Ijen Raung</h1>
							<p><i class="fa fa-map marker  fa-fw"></i> Sistem informasi yang memuat data terkait produk kopi arabika ijen raung di Kabupaten Bondowoso</p>
						</div>
					</div>
					<hr class="hr1 margin-b-10" />
				</div>
			</div>
		</div>
	</div>
	<div class="container margin-b70">
		<nav class="navbar navbar-default navbar-utama" role="navigation">
			<!-- Brand and Toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">status</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php"><i class="fa fa-home "></i> HALAMAN DEPAN</a></li>
					<li><a href="data.php"><i class="fa fa-list-ul"></i> DATA HILIRISASI PRODUK KOPI ARABIKA IJEN RAUNG</a></li>
					<li><a href="peta.php"><i class="fa fa-map-marker"></i> PETA PERSEBARAN HILIRISASI PRODUK KOPI ARABIKA IJEN RAUNG</a></li>
					<li><a href="about.php" data-toggle="modal" data-target="#about"><i class="fa fa-user"></i> ABOUT</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
	</div>
</body>

</html>