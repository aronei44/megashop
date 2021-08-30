@extends('main')
@section('konten')
	<div class="container">
		<h1>
			Ubah Foto Profil
		</h1>
		<h3>Foto Sebelumnya</h3>
		<div style="width: 400px;">
			<img src="img/{{auth()->user()->image}}" style="width: 100%">
			<p>Nama File = {{auth()->user()->image}}</p>
		</div><br><hr><br>
		<h3>Foto Baru</h3>
		<form action="" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label for="image">Foto Baru</label>
				<input type="file" name="image" id="image" class="form-control">
			</div><br>
			<button type="submit" class="btn btn-primary">Ubah Foto</button>
		</form>
	</div><br><br><br>
@endsection