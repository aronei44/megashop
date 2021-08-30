@extends('main')
@section('konten')
<?php
$kategories = ['all','scripts','laptop','hp','jasa','lainnya'];
?>
<div class="bg-light" style="padding-top: 20px; padding-bottom: 20px;">
	<div class="container">
		{{-- nav kategori --}}
		<ul class="nav">
			@foreach($kategories as $kategori)
		  <li class="nav-item">
		    <a class="nav-link @if($is_active == $kategori) bg-white  @endif" href="/toko/{{$kategori}}" style="color: black;">{{$kategori}}</a>
		  </li>
		  @endforeach
		</ul>
		{{-- end nav kategori --}}
		{{-- item list --}}
		<div class="row bg-white" style="padding: 20px;">
			{{-- item box --}}
			@for($i = 0; $i <10 ; $i++)
			<div class="col-md-5 me-4 ms-4 mt-2 mb-2 shadow-lg p-3 mb-5 bg-body rounded" style="overflow: hidden;">
				<div class="box-list">
					<div class="row">
						<div class="col-4" style="padding: 0px;">
							<img src="../img/barang1.jpg">
						</div>
						<div class="col-8">
							<h4>
								Nama Barang
							</h4>
							<hr>
							<p>
								Rp 0000,- | <a href="/barang/{{$i}}">
									Selengkapnya
								</a>
							</p>
						</div>
					</div>
				</div>
			</div>		
			@endfor
			{{-- end item box --}}
		</div>
		{{-- end item list --}}
	</div>
</div>
	
@endsection