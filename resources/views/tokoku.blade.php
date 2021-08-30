@extends('main')
@section('konten')
	<div class="container mt-5 mb-5">
		<div class="bg-danger text-white container">
			<h1><i class="fas fa-shopping-cart"></i> Toko Saya</h1>
		</div><br>
		<a class="btn btn-primary" href="/tokoku/tambah-barang"><i class="fas fa-plus"></i> Tambah Barang Saya</a>
		<br>
		<hr>
		<br>
		<div style="overflow: auto;">
			
			<table class="table table-hover">
				<tr>
					<td>No.</td>
					<td>Nama Barang</td>
					<td>Kategori</td>
					<td>Harga</td>
					<td>Diskon(%)</td>
					<td>Gambar</td>
					<td>Aksi</td>
				</tr>
				<tr>
					<td>1</td>
					<td style="word-wrap: break-word; width: 20%;">Script laravel cbt dan absensi dan blb aldankjbcc hak c ags </td>
					<td>Script</td>
					<td>Rp 1000000</td>
					<td>10</td>
					<td><img src="img/barang1.jpg" style="width: 200px;"></td>
					<td>
						<a href="/tokoku/edit" class="btn btn-primary"><i class="fas fa-edit"></i></a>
						<a href="/tokoku/lihat" class="btn btn-success"><i class="fas fa-eye"></i></a>
						<a href="/tokoku/hapus" class="btn btn-danger"><i class="fas fa-trash"></i></a>
					</td>
				</tr>
			</table>
		</div>
	</div>
@endsection	