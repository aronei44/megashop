@extends('main')
@section('konten')
	<div class="bg-light">
		<br><br><br>
		<div class="form bg-white">
			<h1 class="text-center">Login</h1>
			<br>
			<div class="container">
				<form action="" method="post">
					@csrf
					<div class="form-floating mb-3">
					  <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{old('email')}}">
					  <label for="email">Email address</label>
					</div>
					<div class="form-floating">
					  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
					  <label for="password">Password</label>
					</div><br>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
				<br>
			</div>
		</div>
		<br>
		<p class="text-center">Belum punya akun? <a href="/register">Buat Akun</a></p>
		<br><br><br>
	</div>	
@endsection