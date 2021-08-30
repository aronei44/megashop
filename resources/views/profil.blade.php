@extends('main')
@section('konten')
<div class="bg-light"><br>
	<div class="container bg-white">
		<div style="width: 300px; height: 300px; overflow: hidden;" class="mx-auto">
			<img @if(auth()->user()->image!='')src="img/{{auth()->user()->image}}"@else src="img/undraw_profile.svg"@endif class="img-thumbnail rounded-circle" style="width: 100%">
		</div>
		<div class="bg-danger container text-white">
			<h1>Informasi Akun</h1>
		</div>
		<div class="bg-light container">
			<a href="/editprofil" class="btn btn-primary">Lengkapi Informasi Akun</a>
			<a href="/editfoto" class="btn btn-primary">Ganti Foto</a>
			<div class="row">
				<div class="col-md-6">
					<h2>Profil</h2>
					<table>
						<tr>
							<td>Nama Lengkap</td>
							<td>: @if(auth()->user()->name != ''){{auth()->user()->name}}@else Belum Diisi @endif</td>
						</tr>
						<tr>
							<td>Username</td>
							<td>: {{auth()->user()->username}}</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>: {{auth()->user()->email}}</td>
						</tr>
						<tr>
							<td>No Hp</td>
							<td>: {{auth()->user()->no_hp}}</td>
						</tr>
					</table>
				</div>
				<div class="col-md-6">
					<h2>Alamat</h2>
					<table>
						<tr>
							<td>Provinsi</td>
							<td>: @if(auth()->user()->origin != ''){{$provinsi}}@else Belum Diisi @endif</td>
						</tr>
						<tr>
							<td>Kota</td>
							<td>: @if(auth()->user()->city != ''){{$kota}}@else Belum Diisi @endif</td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>: @if(auth()->user()->alamat != ''){{auth()->user()->alamat}}@else Belum Diisi @endif</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection