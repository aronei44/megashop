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
				<?php $i=0;?>
				@foreach($goods as $good)
					<?php $i++;?>
					<tr>
						<td>{{$i}}</td>
						<td style="word-wrap: break-word; width: 20%;">{{$good->good_name}}</td>
						<td>{{$good->good_category}}</td>
						<td>{{$good->good_price}}</td>
						<td>{{$good->good_discount}}</td>
						<td><img src="img/{{$good->good_image}}" style="width: 200px;"></td>
						<td>
							<a href="/tokoku/edit/{{$good->id}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
							<a href="/tokoku/lihat/{{$good->id}}" class="btn btn-success"><i class="fas fa-eye"></i></a>
							<a href="/tokoku/hapus/{{$good->id}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
						</td>
					</tr>
				@endforeach

			</table>
		</div>
	</div>
@endsection	