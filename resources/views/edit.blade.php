@extends('main')
@section('konten')
<div class="bg-light" style="padding-top: 50px; padding-bottom: 50px;">
	<div class="container bg-white">
		<h1>Edit Profil Anda</h1>
		<br><br>
		<form action="" method="post">
			@csrf
			<div class="form-group">
				<label for="name">Nama Lengkap</label>
				<input type="text" name="name" id="name" class="form-control" value="{{auth()->user()->name}}">
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" id="username" class="form-control" value="{{auth()->user()->username}}">
			</div>
			<div class="form-group">
				<label for="no_hp">No Hp</label>
				<input type="number" name="no_hp" id="no_hp" class="form-control" value="{{auth()->user()->no_hp}}">
			</div>
			<div class="form-group">
				<label for="province_id">Provinsi</label>
				<select name="province_id" id="province_id" class="form-control">
					<option value="">Provinsi Tujuan</option>
					@foreach ($provinsi  as $row)
						<option value="{{$row['province_id']}}" namaprovinsi="{{$row['province']}}" @if($row['province_id']==auth()->user()->origin)selected @endif>{{$row['province']}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="kota_id">Kota</label>
				<select name="kota_id" id="kota_id" class="form-control"></select>
			</div>
			<div class="form-group">
				<label for="alamat">Alamat Lengkap</label>
				<textarea name="alamat" id="alamat" class="form-control">{{auth()->user()->alamat}}</textarea>
			</div>	
			<button class="btn btn-primary">Simpan</button>
		</form>

	</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script>

	$(document).ready(function(){
	//ini ketika provinsi tujuan di klik maka akan eksekusi perintah yg kita mau
	//name select nama nya "provinve_id" kalian bisa sesuaikan dengan form select kalian
		$('select[name="province_id"]').on('change', function(){
		// kita buat variable provincedid untk menampung data id select province
			let provinceid = $(this).val();
			//kita cek jika id di dpatkan maka apa yg akan kita eksekusi
			if(provinceid){
			// jika di temukan id nya kita buat eksekusi ajax GET
				jQuery.ajax({
				// url yg di root yang kita buat tadi
					url:"/editprofil/"+provinceid,
					// aksion GET, karena kita mau mengambil data
					type:'GET',
					// type data json
					dataType:'json',
					// jika data berhasil di dapat maka kita mau apain nih
					success:function(data){
					// jika tidak ada select dr provinsi maka select kota kososng / empty
						$('select[name="kota_id"]').empty();
						// jika ada kita looping dengan each
						$.each(data, function(key, value){
						// perhtikan dimana kita akan menampilkan data select nya, di sini saya memberi name select kota adalah kota_id
						$('select[name="kota_id"]').append('<option value="'+ value.city_id +'" namakota="'+ value.type +' ' +value.city_name+ '">' + value.type + ' ' + value.city_name + '</option>');
						});
					}
				});
			}else {
			$('select[name="kota_id"]').empty();
			}
		});
	});

</script>
@endsection