@extends('main')
@section('konten')
{{-- jumbotron --}}
  <div class="container-fluid" id="jumbotron">
    <div class="container">
      <h1 class="text-danger">
        Mega Shop
      </h1>
      <br>
      <h3>
        Dari Pelosok Untuk Negeri
      </h3>
      <br>
      <br>
      <br>
      <hr>
      <br>
      <a href="/toko" class="btn btn-primary">
        Belanja Sekarang
      </a>
      <a href="/login" class="btn btn-outline-primary">
        Daftar
      </a>
    </div>
  </div>
{{-- end of jumbotron --}}

{{-- All Item --}}
<div class="items  mt-5 mb-5">
  <div class="container bg-danger">
    <h1 class="text-white">
      Semua Barang
    </h1>
  </div>
  <div class="container border border-danger">
    <p class="text-end"><a href="/toko">Lihat Semua</a></p>
    <div class="box">
      {{-- Box Item --}}
      @for($i = 0; $i<10 ;$i++)
      <div class="box-item border border-secondary me-1 ms-1">
        <div class="image">
          <img src="img/barang1.jpg">
        </div>
        <div class="row align-items-center" style="padding: 3px;">
          <div class="col-8">
            <h4>Nama Produk</h4>
            <h5>Rp. 00000,-</h5>
          </div>
          <div class="col-4">
            <a href="/barang/{{$i}}" class="btn btn-primary">Lihat</a>
          </div>
        </div>
      </div>
      @endfor
      {{-- end of box item --}}
    </div>
  </div>
</div>
{{-- end of all item --}}


{{-- Category Item --}}
<div class="items  mt-5 mb-5">
  <div class="container bg-danger">
    <h1 class="text-white">
      Scripts
    </h1>
  </div>
  <div class="container border border-danger">
    <p class="text-end"><a href="/toko/scripts">Lihat Semua</a></p>
    <div class="box">
      {{-- Box Item --}}
      @for($i = 0; $i<10 ;$i++)
      <div class="box-item border border-secondary me-1 ms-1">
        <div class="image">
          <img src="img/barang1.jpg">
        </div>
        <div class="row align-items-center" style="padding: 3px;">
          <div class="col-8">
            <h4>Nama Produk</h4>
            <h5>Rp. 00000,-</h5>
          </div>
          <div class="col-4">
            <a href="/barang/{{$i}}" class="btn btn-primary">Lihat</a>
          </div>
        </div>
      </div>
      @endfor
      {{-- end of box item --}}
    </div>
  </div>
</div>
{{-- end of category item --}}



















@endsection