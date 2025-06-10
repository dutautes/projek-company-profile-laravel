@extends('templates.page', ['koleksi' => "active border-bottom border-2"])

@section('style')
    <style>
        .tombol {
            border-radius: 0
        }
    </style>
@endsection


@section('content')

<div class="container mb-5" style="margin-top: 10rem;">
    <div class="text-center d-flex flex-column justify-content-center align-items-center"> {{-- judul--}}
        <p class="fs-2">Our Collections</p>
        <p class="fs-5 text-secondary" style="font-family: sans-serif;">Explore our curated collections of minimalist designs</p>
        <br>
        <div class="d-flex text-center text-dark gap-3 mb-5 center ">
            <button class="btn border btn-outline-light text-dark py-2 px-3 tombol" onclick="filterKategori('all')">All Collections</button>
            <button class="btn border btn-outline-light text-dark py-2 px-3 tombol" onclick="filterKategori('Minimalist Basics')">Minimalist Basics</button>
            <button class="btn border btn-outline-light text-dark py-2 px-3 tombol" onclick="filterKategori('Summer Essentials')">Summer Essentials</button>
            <button class="btn border btn-outline-light text-dark py-2 px-3 tombol" onclick="filterKategori('Modern Formalwear')">Modern Formalwear</button>
        </div>
    </div>
    <div class="row">
        {{-- card 1 --}}
        <div class="col-md-4 col-12 p-3 mb-3 fashion-card" data-kategori="Minimalist Basics">
            <div class="card border-0 overflow-hidden bg-dark text-white">
                <img src="assets/model-1.jpg" class="card-img-top" style="height: 500px; object-fit: cover;" alt="Minimalist Basics">
                <div class="p-3 bg-light text-dark">
                    <h5 class="card-title">Minimalist Basics</h5>
                    <p class="card-text">Timeless designs for the modern wardrobe.</p>
                </div>
            </div>
        </div>

        {{-- card 2 --}}
        <div class="col-md-4 col-12 p-3 mb-3 fashion-card" data-kategori="Minimalist Basics">
            <div class="card border-0 overflow-hidden bg-dark text-white">
                <img src="assets/model-2.jpg" class="card-img-top" style="height: 500px; object-fit: cover;" alt="Minimalist Basics">
                <div class="p-3 bg-light text-dark">
                    <h5 class="card-title">Minimalist Basics</h5>
                    <p class="card-text">Timeless designs for the modern wardrobe.</p>
                </div>
            </div>
        </div>

        {{-- card 3 --}}
        <div class="col-md-4 col-12 p-3 mb-3 fashion-card" data-kategori="Modern Formalwear">
            <div class="card border-0 overflow-hidden bg-dark text-white">
                <img src="assets/model-3.jpg" class="card-img-top" style="height: 500px; object-fit: cover;" alt="Modern Formalwear">
                <div class="p-3 bg-light text-dark">
                    <h5 class="card-title">Modern Formalwear</h5>
                    <p class="card-text">Effortles pieces for warm-weather styling.</p>
                </div>
            </div>
        </div>

        {{-- card 4 --}}
        <div class="col-md-4 col-12 p-3 mb-3 fashion-card" data-kategori="Summer Essentials">
            <div class="card border-0 overflow-hidden bg-dark text-white">
                <img src="assets/model-4.jpg" class="card-img-top" style="height: 500px; object-fit: cover;" alt="Summer Essentials">
                <div class="p-3 bg-light text-dark">
                    <h5 class="card-title">Summer Essentials</h5>
                    <p class="card-text">Effortles pieces for warm-weather styling.</p>
                </div>
            </div>
        </div>

        {{-- card 5 --}}
        <div class="col-md-4 col-12 p-3 mb-3 fashion-card" data-kategori="Summer Essentials">
            <div class="card border-0 overflow-hidden bg-dark text-white">
                <img src="assets/model-5.jpg" class="card-img-top" style="height: 500px; object-fit: cover;" alt="Summer Essentials">
                <div class="p-3 bg-light text-dark">
                    <h5 class="card-title">Summer Essentials</h5>
                    <p class="card-text">Effortles pieces for warm-weather styling.</p>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
