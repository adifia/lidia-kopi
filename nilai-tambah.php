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
					</div>
				</div>
			</div>
		</div>
	</main>
</div>

<?php include_once "footer.php" ?>