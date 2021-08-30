<!doctype html>
<html lang="en">
  <head>
    @include('assets.head')
  </head>
  <body>
  	@include('assets.nav')
    <br><br>
  	@yield('konten')

  	<div class="bg-dark" id='footer'>
  		<div class="container text-white">
  			<div class="row">
  				<div class="col-md-4">
  					<h1 class="text-danger">
  						Mega Shop
  					</h1>
  					<p>Jl. Sirnagalih <br>Desa Megamendung <br>Kecamatan Megamendung <br>Bogor - Jawa Barat</p>
  				</div>
  				<div class="col-md-4 text-white">
  					<h3>Link Cepat :</h3>
  					<ul>
  						<li><a href="/" class=" text-white">Home</a></li>
  						<li><a href="/toko" class=" text-white">Toko</a></li>
  						<li><a href="/tentang" class=" text-white">Tentang</a></li>
  					</ul>
  				</div>
  				<div class="col-md-4">
  					<h3>Ikuti Kami :</h3>
  					<a href="https://facebook.com/arwani.maulana.5" class="text-white"><i class="fab fa-facebook"></i></a>
  					<a href="https://instagram.com/megadigi12" class="text-white"><i class="fab fa-instagram"></i></a>
  					<hr>
  					<p>
  					  &copyCopyright MegaDigi 2021
  					</p>
  				</div>
  			</div>
  		</div>
  	</div>
    @include('assets.js')
  </body>
</html>