@extends('main')
@section('konten')
	<div class="container mt-5 mb-5">
		<div class="bg-danger container text-white">
			<h1><i class="fas fa-plus"></i> Tambah Barang</h1>
		</div><br>
		<form>
			<div class="form-group">
				<label for="good_name">Nama Barang</label>
				<input type="text" name="good_name" id="good_name" class="form-control">	
			</div>
			<div class="form-group">
				<label for="good_image">Foto Barang</label>
				<input type="file" name="good_image" id="good_image" class="form-control">
			</div>
			<div class="form-group">
				<label for="good_price">Harga Barang</label>
				<input type="number" name="good_price" id="good_price" class="form-control">
			</div>
			<div class="form-group">
				<label for="good_discount">Discount Barang (%)</label>
				<input type="number" name="good_discount" id="good_discount" class="form-control">
			</div>
			<div class="form-group">
				<label for="good_stocks">Stok Barang</label>
				<input type="number" name="good_stocks" id="good_stocks" class="form-control">
			</div>
			<div class="form-group">
				<label for="good_category">Kategori Barang</label>
				<select name="good_category" id="good_category" class="form-control">
					<option>Pilih Kategori</option>
					<option value="Elektronik">Elektronik</option>
					<option value="Digital">Digital</option>
					<option value="Makanan dan Minuman">Makanan dan Minuman</option>
					<option value="Fashion">Fashion</option>
					<option value="Aksesoris">Aksesoris</option>
					<option value="Barang Mewah">Barang Mewah</option>
					<option value="Lainnya">Lainnya</option>
				</select>
			</div>
			<div class="form-group">
				<label for="good_desc">Deskripsi Barang</label>
				<textarea name="good_desc" id="good_desc" class="form-control"></textarea>
			</div><br>
			<button class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
		</form>
	</div>
@endsection