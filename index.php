

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<title>Halaman Pendaftaran</title>
	<link rel="stylesheet" href="css/material.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/material.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<script src="js/script.js"></script> 


</head>
<body>

	<section id="logo">

	</section>



	<section id="menuregister">
		<h4 class="mdl-dialog__title">Pendaftaran Hotspot</h4>
		<div class="mdl-dialog__content">
			<p>
				Silakan masukan data-data anda dengan benar!.
			</p>
			<!-- <form action="insertUser(this.value)" method="post"> -->
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="idnisn" name="nnisn">
					<label class="mdl-textfield__label" for="idnisn">Nisn (320141689).</label>
					<span class="mdl-textfield__error">Inputkan Hanya angka</span>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" id="idnama" name="nname">
					<label class="mdl-textfield__label" for="idnama">Nama</label>
				</div>
				<div>
					<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="tomboldaftar" onclick="daftarFunciton()">
						Daftar
					</button>
					<div id="prosesdaftar" style="display: none;">
						<div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active"></div>
					</div>
				</div>
				
			<!-- </form> -->
			<div id="txtHint"><b></b></div>
		</div>

	</section>


</body>
</html>