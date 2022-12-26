<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>INDEKS KEPUASAN MASYARAKAT | Ngoding Pintar</title>
  </head>
  <body>
	  <div class="jumbotron jumbotron-fluid bg-info text-white">
		  <div class="container text-center">
		    <h1 class="display-4">Ngoding pintar</h1>
		    <p class="lead">
		    	<h2>
		    		INDEKS KEPUASAN MASYARAKAT
		    		<br> Terhadap Pelayanan Kantor Ngoding pintar
		    	</h2>
		    </p>
		  </div>
	  </div>

	 <style type="text/css">
		.box{
			padding: 30px 40px;
			border-radius: 5px;
		} 	
	 </style>
	<?php
		//panggil koneksi database
		include "koneksi.php";

		//tampilkan data dari tabel tikm
		$tampil = mysqli_query($koneksi, "SELECT * from tikm");
		$data = mysqli_fetch_array($tampil);

	?>
	 <div class="container">
	 	<div class="alert alert-warning" role="alert">
		  Perhatian!!! untuk memberikan penilaian/poling/suara silahkan klik Icon / Emoji
		</div>
	 	<div class="row text-center">
	 		<div class="col-md-4">
	 			<div class="bg-primary box text-white">
	 				<div class="row">
	 					<div class="col-md-6">
	 						<h5>MEMUASKAN</h5>
	 						<h2 id="data-mati"> [ <?=$data['puas']?> ] </h2>
	 						<h5>suara </h5>
	 					</div>
		 					<div class="col-md-4">
		 						<a href="simpan.php?ket=puas" title="Jika Anda Merasa Puas dengan Pelayanan kami, Klik Icon ini!">
		 							<img src="img/puas.png" style="width: 100px;">
		 						</a>
		 					</div>
	 					
	 				</div>
	 			</div>
	 		</div>

	 		<div class="col-md-4">
	 			<div class="bg-success box text-white">
	 				<div class="row">
	 					<div class="col-md-6">
	 						<h5>CUKUP</h5>
	 						<h2 id="data-mati"> [ <?=$data['cukup']?> ] </h2>
	 						<h5>suara </h5>
	 					</div>
	 					<div class="col-md-4">
	 						<a href="simpan.php?ket=cukup" title="Jika Anda Merasa Cukup dengan Pelayanan kami, Klik Icon ini!">
	 							<img src="img/cukup.png" style="width: 100px;">
	 						</a>
	 					</div>
	 				</div>
	 			</div>
	 		</div>

	 		<div class="col-md-4">
	 			<div class="bg-danger box text-white">
	 				<div class="row">
	 					<div class="col-md-6">
	 						<h5>KURANG</h5>
	 						<h2 id="data-sembuh"> [ <?=$data['kurang']?> ] </h2>
	 						<h5>suara </h5>
	 					</div>
	 					<div class="col-md-4">
	 						<a href="simpan.php?ket=kurang" title="Jika Anda Merasa Kurang dengan Pelayanan kami, Klik Icon ini!">
	 							<img src="img/kurang.png" style="width: 100px;">
	 						</a>
	 					</div>
	 				</div>
	 			</div>
	 		</div>

	 	</div>
	 	<!-- Akhir Row -->
	 </div>
	<!-- Akhir Container -->
	 <footer class="bg-info text-center text-white mt-3 bt-2 pb-2">
	 	Create by. Channel Youtube "Ngodingpintar"
	 </footer>

	 
  </body>
</html>
