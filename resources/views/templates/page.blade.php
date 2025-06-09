<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Eleganzze'}}</title>
    {{-- cdn bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    {{-- google font--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Quicksand:wght@300..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    {{-- cdn font awaesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    {{-- style --}}
    <style>
        * {
            font-family:serif;
        }
    </style>
    @yield('style')
  </head>
  <body>
    {{-- navbar --}}
    <nav id="mainNavbar" class="navbar navbar-expand-lg bg-transparent shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-secondary" href="#">ELEGANZZE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
                <ul class="navbar-nav mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ $beranda ?? ''}} text-secondary" aria-current="page" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $koleksi ?? ''}} text-secondary" href="/koleksi">COLLECTIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $about ?? ''}} text-secondary" href="/about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-secondary">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-secondary">
                            <i class="fa-solid fa-user"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-secondary">
                            <i class="fa-solid fa-bag-shopping"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- main / isi konten --}}
    <div>
        {{-- wadah konten dinamis yang akan diisi ketika file ini digunakan/dipanggil --}}
        @yield('content')
    </div>

    {{-- footer --}}
    <footer style="background-color: darkgray">
        <div class="container d-flex justify-content-center flex-column p-5" style="font-family: sans-serif">
            <div class="row">
                <div class="col">
                    <p class="fs-6" style="font-family: 'IBM Plex Serif;'">ELEGANZEE</p>
                    <p class="fs-6">Minimalist fashion for the modern individual. Timeless designs crafted with quality materials.</p>
                </div>
                <div class="col">
                    <p class="fs-6">COLLECTOINS</p>
                    <a href="" class="nav-link">Spring 2025</a>
                    <a href="" class="nav-link">Minimalist Basic</a>
                    <a href="" class="nav-link">Urban Collection</a>
                </div>
                <div class="col">
                    <p class="fs-6">INFORMATION</p>
                    <a href="/about" class="nav-link">About Us</a>
                    <a href="/about" class="nav-link">Sustainability</a>
                    <a href="/about" class="nav-link">Careers</a>
                    <a href="/about" class="nav-link">Privacy Policy</a>
                </div>
                <div class="col">
                    <p class="fs-6">CONTACT</p>
                    <a href="" class="nav-link">123 Fashion Street</a>
                    <a href="" class="nav-link">Bogor, Cisarua 16750</a>
                    <a href="" class="nav-link">contact@eleganzze.com</a>
                    <a href="" class="nav-link">+12 345 6789</a>
                </div>
            </div>
            <div class="bg-dark w-100 mb-4 mt-4" style="height: 1px"></div>
            <div>
                <p class="fs-7" style="font-family: sans-serif">© 2025 ELEGANZZE. All rights reserved.</p>
            </div>
        </div>
    </footer>
    {{-- scripts --}}
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
  </body>
</html>
