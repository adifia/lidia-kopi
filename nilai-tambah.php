<?php
$title = "Tabel Perhitungan Nilai Tambah Produk Kopi Arabika Ijen Raung";
$GLOBALS['page'] = "halaman";
include_once "header.php";
// include_once "ambildata.php";
// include_once "koneksi.php"; 
?>
<div class="wrapper bgded overlay" style="background-image:url('images/kopi2.jpg');">
	<div id="breadcrumb" class="hoc clear">
		<!-- ################################################################################################ -->
		<h6 class="heading">Perhitungan nilai tambah</h6>
		<ul>
			<li><a href="index.php">Beranda</a></li>
			<!-- <li><a href="#">Lorem</a></li>
			<li><a href="#">Ipsum</a></li> -->
			<li><a href="#">Perhitungan nilai tambah</a></li>
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
							<h2 class="panel-title"><strong>Tabel perhitungan nilai tambah produk kopi arabika ijen raung </strong></h2>
						</div>
						<div class="panel-body">
							<table class="table table-bordered table-striped table-admin">
								<thead>
									<tr>
										<th width="5%">No</th>
										<th width="30%">Variabel</th>
										<th width="15%">Rumus</th>
										<th width="20%">Greenbean</th>
										<th width="20%">Kopi Sangrai</th>
										<th width="20%">Kopi Bubuk</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td class="bold">Output, Input dan Harga</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td>1</td>
										<td>Output (Kg/tahun)</td>
										<td>A</td>
										<td>20,3625
										</td>
										<td>16,29
										</td>
										<td>16,29
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Input (Kg/tahun)</td>
										<td>B</td>
										<td>135,75</td>
										<td>20,3625</td>
										<td>20,3625</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Tenaga Kerja (HOK/tahun)</td>
										<td>C</td>
										<td>5</td>
										<td>5</td>
										<td>5</td>
									</tr>
									<tr>
										<td>4</td>
										<td>Faktor Konversi</td>
										<td>D = A/B</td>
										<td>0,15</td>
										<td>0,8</td>
										<td>0,8</td>
									</tr>
									<tr>
										<td>5</td>
										<td>Koefisien Tenaga Kerja (HOK/Kg)</td>
										<td>E = C/B</td>
										<td>0,037</td>
										<td>0,246</td>
										<td>0,246</td>
									</tr>
									<tr>
										<td>6</td>
										<td>Harga Output (Rp/Kg)</td>
										<td>F</td>
										<td> 106.250 </td>
										<td> 180.000 </td>
										<td> 242.500 </td>
									</tr>
									<tr>
										<td>7</td>
										<td>Upah Tenaga Kerja (Rp/HOK)</td>
										<td>G</td>
										<td> 53.750 </td>
										<td> 53.750 </td>
										<td> 53.750 </td>
									</tr>
									<tr>
										<td></td>
										<td class="bold">Penerimaan dan Keuntungan</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td>8</td>
										<td>Harga Bahan Baku (Rp/Kg)</td>
										<td>H</td>
										<td> 11.000 </td>
										<td> 11.000 </td>
										<td> 11.000 </td>
									</tr>
									<tr>
										<td>9</td>
										<td>Sumbangan Input Lain (Rp/Kg)</td>
										<td>I</td>
										<td> 779 </td>
										<td> 15.877 </td>
										<td> 13.063 </td>
									</tr>
									<tr>
										<td>10</td>
										<td>Nilai Output (Rp/Kg)</td>
										<td>J = D*F</td>
										<td> 15.938 </td>
										<td> 144.000 </td>
										<td> 194.000 </td>
									</tr>
									<tr>
										<td>11</td>
										<td>a. Nilai Tambah (Rp/Kg)</td>
										<td>K = J-I-H</td>
										<td> 4.158 </td>
										<td> 117.123 </td>
										<td> 169.937 </td>
									</tr>
									<tr>
										<td> </td>
										<td>b. Rasio Nilai Tambah (%)</td>
										<td>L = (K/J)*100%</td>
										<td> 26,090</td>
										<td> 81,335</td>
										<td> 87,596</td>
									</tr>
									<tr>
										<td>12</td>
										<td>a. Pendapatan Tenaga Kerja (Rp/Kg)</td>
										<td>M = E*G</td>
										<td> 1.980 </td>
										<td> 13.198 </td>
										<td> 13.198 </td>
									</tr>
									<tr>
										<td></td>
										<td>b. Pangsa Tenaga Kerja (%)</td>
										<td>N = (M/K)*100%</td>
										<td> 47,611 </td>
										<td> 11,269 </td>
										<td> 7,767 </td>
									</tr>
									<tr>
										<td>13</td>
										<td>a. Keuntungan (Rp/Kg)</td>
										<td>O = K-M</td>
										<td> 2.178 </td>
										<td> 103.924 </td>
										<td> 156.738 </td>
									</tr>
									<tr>
										<td></td>
										<td>b. Tingkat Keuntungan (%)</td>
										<td>P = (O/J)*100%</td>
										<td> 13,668 </td>
										<td> 72,170 </td>
										<td> 80,793 </td>
									</tr>
									<tr>
										<td></td>
										<td class="bold">Balas Jasa Pemilik Faktor Produksi</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td>14</td>
										<td>Marjin (Rp/Kg)</td>
										<td>Q = J-H</td>
										<td> 4.938 </td>
										<td> 133.000 </td>
										<td> 183.000 </td>
									</tr>
									<tr>
										<td></td>
										<td>a. Pendapatan Tenaga Kerja (%)</td>
										<td>R = (M/Q)*100%</td>
										<td> 40,096 </td>
										<td> 9,924 </td>
										<td> 7,212 </td>
									</tr>
									<tr>
										<td></td>
										<td>b. Sumbangan Input Lain (%)</td>
										<td>S = (I/L)*100%</td>
										<td> 2987,228 </td>
										<td> 19520,716 </td>
										<td> 14912,996 </td>
									</tr>
									<tr>
										<td></td>
										<td>c. Keuntungan Pengusaha (%)</td>
										<td>T = (O/Q)*100%</td>
										<td> 44,119 </td>
										<td> 78,139 </td>
										<td> 85,649 </td>
									</tr>

								</tbody>
							</table>
						</div>
						<div class="wrapper row3">
							<main class="hoc clear">
								<div class="content">
									<p class="bold">a. Output, Input, dan Harga</p>
									<p class="justified"> Pada perhitungan nilai tambah terdapat tiga variabel, salah satunya adalah variabel output, input, dan harga. Komponen nilai yang terdapat pada variabel tersebut, seperti input, harga produk, hari operasional kerja, dan upah tenaga kerja didapatkan dari hasil wawancara secara langsung dengan pelaku usaha, sehingga didapatkan hasil seperti pada tabel di atas.</p>
									<p class="bold">b. Penerimaan dan Keuntungan</p>
									<p class="justified"> Harga bahan baku, nilai output, dan sumbangan input lain akan menghasilkan nilai tambah dengan cara mengurangi ketiga nilai tersebut. Nilai tambah dari produk greenbean, kopi sangrai, dan kopi bubuk secara berturut-turut sebesar Rp. 4.672/Kg, Rp. 111.608/Kg, dan Rp. 167.260/Kg. Rasio nilai tambah adalah rasio antara nilai tambah dengan nilai output. Pada tabel di atas rasio nilai tambah pada produk greenbean, kopi sangrai, dan kopi bubuk sebesar 29,312%, 77,505%, dan 86,217%. Hal tersebut mengartikan bahwa nilai output greenbean Rp. 4.672/Kg /Kg terdapat 29,312% nilai tambah dari kopi greenbean. Berdasarkan kriteria nilai tambah menurut Hayami, hasil nilai tambah dari ketiga produk kopi tersebut dengan nilai tambah > 0 berarti ketiga jenis produk kopi memberikan nilai tambah bagi para tenaga kerja maupun pemilik usaha.</p>
									<p class="justified"> Nilai keuntungan adalah selisih dari nilai tambah dan pendapatan tenaga kerja. Nilai keuntungan untuk produk greenbean, kopi sangrai, dan bubuk secara berturut-turut sebesar Rp. 2.692/Kg dengan tingkat keuntungan sebesar 16,890%, Rp. 89.409/Kg dengan tingkat keuntungan sebesar 68,340%, dan Rp. 154.062/Kg dengan tingkat keuntungan sebesar 79,413%. Nilai keuntungan tersebut menunjukkan bahwa besarnya upah atau imbalan yang diperoleh para pelaku usaha kopi. Menurut Hasanah, 2015, jika tingkat keuntungan yang diperoleh tinggi, maka agroindustri tersebut dapat meningkatkan pertumbuhan ekonomi. </p>
									<p class="bold">c. Balas Jasa Pemilik Faktor Produksi</p>
									<p class="justified"> Balas jasa terbesar dari ketiga faktor pada ketiga jenis produk kopi berasal dari nilai sumbangan input lain. Nilai sumbangan input lain pada produk greenbean, kopi sangrai, dan bubuk secara berturut-turut adalah 907,245%, 27601,010%, dan 18256,009% artinya sumbangan input lain dari ketiga jenis kopi tersebut menyumbang Rp. 907, Rp. 27.601, dan Rp. 18.256 dalam Rp. 1.000 margin perusahaan. </p>
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