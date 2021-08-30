
  	<nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
		  <div class="container">
		    <a class="navbar-brand" href="/">Mega Shop</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link @if($url == '/')active @endif" aria-current="page" href="/"><i class="fas fa-home"></i> Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link @if($url == '/toko')active @endif" href="/toko"><i class="fas fa-house-user"></i> Toko</a>
		        </li>
		        @guest
		        <li class="nav-item">
		          <a class="nav-link @if($url == '/login')active @endif" href="/login"><i class="fas fa-sign-in-alt"></i> Login</a>
		        </li>
		        @else
		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle @if($url == '/profil')active @endif" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            Hai, {{auth()->user()->username}}
		          </a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		            <li><a class="dropdown-item" href="/profil"><i class="fas fa-user"></i> Profil</a></li>
		            <li><a class="dropdown-item" href="/keranjang"><i class="fas fa-shopping-cart"></i> Keranjang Saya</a></li>
		            <li><a class="dropdown-item" href="/pesanan"><i class="fas fa-shopping-cart"></i> Pesanan Saya</a></li>
		            <li><a class="dropdown-item" href="/tokoku"><i class="fas fa-house-user"></i> Toko Saya</a></li>
		            <li><hr class="dropdown-divider"></li>
		            <li><a class="dropdown-item" href="/logout"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
		          </ul>
		        </li>
		        @endguest
		      </ul>
		      <form class="d-flex">
		        <input class="form-control me-2" type="text" placeholder="Cari Sesuatu" aria-label="Search">
		        <button class="btn btn-outline-light" type="submit">Cari</button>
		      </form>
		    </div>
		  </div>
		</nav>
    