@extends('main')
@section('konten')
	<div class="bg-light">
		<br><br><br>
		<div class="form bg-white">
			<h1 class="text-center">Register</h1>
			<br>
			<div class="container">
				<form action="" method="post">
					@csrf
					<div class="form-floating mb-3">
					  <input type="text" class="form-control @error('username')is-invalid @enderror" id="username" name="username" placeholder="username" required value="{{old('username')}}">
					  <label for="username">Username</label>
					  @error('username')
					  <div class="invalid-feedback">
				        {{$message}}
				      </div>
				      @enderror
					</div>
					<div class="form-floating mb-3">
					  <input type="email" class="form-control @error('email')is-invalid @enderror" id="email" name="email" placeholder="name@example.com" required value="{{old('email')}}">
					  <label for="email">Email address</label>
					  @error('email')
					  <div class="invalid-feedback">
				        {{$message}}
				      </div>
				      @enderror
					</div>
					<div class="form-floating mb-3">
					  <input type="number" class="form-control @error('no_hp')is-invalid @enderror" id="no_hp" name="no_hp" placeholder="name@example.com" required value="{{old('no_hp')}}">
					  <label for="no_hp">No Hp.</label>
					  @error('no_hp')
					  <div class="invalid-feedback">
				        {{$message}}
				      </div>
				      @enderror
					</div>
					<div class="form-floating">
					  <input type="password" class="form-control @error('password')is-invalid @enderror" id="password" name="password" placeholder="Password" required>
					  <label for="password">Password</label>
					  @error('password')
					  <div class="invalid-feedback">
				        {{$message}}
				      </div>
				      @enderror
					</div><br>
					<button type="submit" class="btn btn-primary">Register</button>
				</form>
				<br>
			</div>
		</div>
		<br>
		<p class="text-center">Sudah punya akun? <a href="/login">Masuk</a></p>
		<br><br><br>
	</div>	
@endsection