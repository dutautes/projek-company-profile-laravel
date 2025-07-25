@extends('templates.page', ['beranda' => "active border-bottom border-2"])

{{-- embed style --}}
@section('style')
<style>
  /* transisi halus */
#mainNavbar {
    transition: background-color .3s ease, box-shadow .3s ease;
}

  /* warna saat sudah discroll */
#mainNavbar.scrolled {
    background-color: #ffffff !important;   /* putih */
    box-shadow: 0 2px 8px rgba(0,0,0,.1);
}

    /* fade in up transition */
.fade-in-up {
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 0.8s ease-out forwards;
    animation-delay: 0.2s; /* opsional */
}

@keyframes fadeInUp {
    to {
      opacity: 1;
      transform: translateY(0);
    }
}

.zoom-img {
    transition: transform 0.5s ease;
    object-fit: cover;
    height: 100%;
    width: 100%;
}

.card:hover .zoom-img {
    transform: scale(1.1);
}

.card-img-overlay {
    background: linear-gradient(to top, rgba(0,0,0,0.6), rgba(0,0,0,0));
}

/* button learn more */
.learnMore {
    border: 1px solid black;
    padding: .75rem;
    color: black;
    background-color: #fff;
    font-size: 1rem;
    transition: ease-in-out 0.2s;
    text-decoration: none;
    font-family: sans-serif;
}

.learnMore:hover {
    color: white;
    background-color: black;
}

.input-bawah {
  border: none;
  border-bottom: 2px solid #000;
  border-radius: 0;
  padding: 8px;
  outline: none;
}

</style>
@endsection

@section('content')
    <div class="container-fluid d-flex align-items-center justify-content-center text-white mb-5"
         style="min-height: 100vh; background-image: url('{{ asset('assets/model-1.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="text-center">
            <p class="fw-lighter fade-in-up" style="font-size: 4rem">ELEGANZZE</p>
            <p style="font-family: sans-serif" class="fs-5 px-2 fade-in-up">Minimalist fashion for the modern individual. Timeless designs crafted with quality materials.</p>
            <a href="/koleksi" class="btn btn-outline-light fs-5 px-4 py-2 fade-in-up">
            Explore Collections
            </a>
        </div>
    </div>

    <section class="container text-center" style="margin-bottom: 10rem;">
        <p class="fs-1">Featured Collections</p>
        <p class="fs-5 mb-5 text-secondary" style="font-family: sans-serif">Explore our latest designs and timeless essentials</p>
        {{-- display grid --}}
         <div class="row">
            <div class="col-md-4 col-12 p-3 mb-3">
                {{-- card koleksi 1 --}}
                {{-- .card-image-container = bungkus gambar buat atur overflow. --}}
                <div class="card border-0 overflow-hidden bg-dark text-white" style="height: 500px;"> {{-- .zoom-img = buat hover scale img  --}}
                    <div class="card-img-container h-100">
                        <img src="assets/clothes.jpg" class="card-img zoom-img" alt="Minimalist Basics">
                    </div>
                    <div class="card-img-overlay d-flex flex-column justify-content-end p-4"> {{-- .card-img-overlay = buat teks di atas gambar  --}}
                        <h5 class="card-title">Minimalist Basics</h5>
                        <p class="card-text">Timeless designs for the modern wardrobe</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 p-3 mb-3">
                {{-- card koleksi 2 --}}
                <div class="card border-0 overflow-hidden bg-dark text-white" style="height: 500px;">
                    <div class="card-img-container h-100">
                        <img src="assets/model-4.jpg" class="card-img zoom-img" alt="Minimalist Basics">
                    </div>
                    <div class="card-img-overlay d-flex flex-column justify-content-end p-4">
                        <h5 class="card-title">Summer Essentials</h5>
                        <p class="card-text">Effortles pieces for warm-weather styling</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 p-3 mb-3">
                {{-- card koleksi 3 --}}
                <div class="card border-0 overflow-hidden bg-dark text-white" style="height: 500px;">
                    <div class="card-img-container h-100">
                        <img src="assets/model-3.jpg" class="card-img zoom-img" alt="Minimalist Basics">
                    </div>
                    <div class="card-img-overlay d-flex flex-column justify-content-end p-4">
                        <h5 class="card-title">Modern Formalwear</h5>
                        <p class="card-text">Clean lines and refined silhouettes for every occasion.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="philosopy mb-5">
        <div class="container d-flex justify-content-center align-items-center flex-row gap-5">
            <div>
                <img src="assets/model-3.jpg" alt="philosopy" width="512">
            </div>
            <div class="description">
                <p class="fs-1">Our Philosophy</p>
                <p class="fs-5 mb-4" style="font-family: sans-serif;">At ELEGANZA, we believe in the power of minimalism and quality craftsmanship. Our designs emphasize clean lines, timeless silhouettes, and sustainable materials. Each piece is created to stand the test of time, both in durability and style. We're committed to creating fashion that feels as good as it looks, with a focus on ethical production and environmental responsibility.</p>
                <a href="#" class="learnMore">Learn More</a>
            </div>
        </div>
    </section>
    <section class="message container mb-5 mt-5">
        <div class="text-center">
            <p class="fs-2">Get in Touch</p>
            <p class="fs-5" style="font-family: sans-serif">Have questions about our collections or interested in collaboration opportunities? We'd love to hear from you.</p>
            <br>
        </div>
        <div id="message" class="text-start d-flex justify-content-center">
            <form action="#" class="d-flex align-items-start flex-column text-start w-50">
                <label for="name">NAMA</label>
                <input type="text" class="form-control input-bawah" id="name">
                <label for="email">EMAIL</label>
                <input type="email" class="form-control input-bawah" id="email">
                <label for="message">MESSAGE</label>
                <textarea name="message" class="form-control input-bawah" id="message" cols="20" rows="10"></textarea>
                <input type="submit" value="Send" class="w-100 mt-4 btn btn-outline-light bg-dark text-light">
            </form>
        </div>
    </section>
@endsection
