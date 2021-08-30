@extends('main')
@section('konten')
	<div class="container mb-5 mt-5">
		<h1>Detail Barang</h1>
		<div class="row bg-light">
			<div class="col-md-6">
				<img src="../img/barang1.jpg" id="foto-gambar" class="img-thumbnail">
			</div>
			<div class="col-md-6">
				<h4>Nama Barang : Nama Barang ke - {{$id}}</h4>
				<div class="bg-white container">
					<p>Harga : Rp 10000</p>
					<p>Lokasi : Jl bla bla bla</p>
					<p>Rating : 4/5 (100 pembeli)</p>
				</div><br><hr><br>
				<div class="row">
					<div class="col-auto">
						<form action="/beli" method="post">
							@csrf
							<input type="hidden" name="nama" value="id_barang">
							<button type="submit" class="btn btn-primary">Beli Sekarang</button>
						</form>
					</div>
					<div class="col-auto">
						<form action="/chart" method="post">
							@csrf
							<input type="hidden" name="nama" value="id_barang">
							<button type="submit" class="btn btn-warning">Tambah Ke Keranjang</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<h3>Keterangan Barang</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<hr>
		<h3>Ulasan</h3>
		<div class="bg-light container">
			<div>
				<p>Disini Nama | 4/5</p>
				<div class="bg-white container">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
				</div>
			</div>
		</div>
	</div>
@endsection