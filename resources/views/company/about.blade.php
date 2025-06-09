@extends('templates.page', ['title' => "Eleganzze - About"], ['about' => "active border-bottom border-2"])

@section('content')
{{-- section Story --}}
<section class="container" style="margin-top: 8rem; margin-bottom: 10rem;">
    <div class="title text-center mb-5">
        <p class="fs-1">About Us</p>
    </div>
    <div class="row justify-content-center align-items-center flex-row">
        <div class="col-md-6 col-12">
            <img src="assets/about.jpg" alt="story" width="640">
        </div>
        <div class="col-md-6 col-12">
            <p class="fs-3">Our Stroy</p>
            <p class="fs-6 text-secondary" style="font-family: sans-serif;">ELEGANZZE was founded in 2020 with a simple vision: to create thoughtfully designed, high-quality fashion that stands the test of time. We believe in the power of minimalism and quality craftsmanship. Each piece is created with attention to detail and a commitment to ethical production practices. Our journey began in a small studio in New York, where our founder Alexandra Chen sketched her first collection. Today, we've grown into a team of passionate designers and artisans who share a love for timeless design and sustainable fashion.</p>
        </div>
    </div>
</section>

{{-- section Values --}}
<section class="container mt-5 text-center" style="margin-bottom: 10rem;">
    <div class="title mt-5">
        <p class="fs-2 fw-lighter">Our Values</p>
        <p class="fs-5 text-secondary" style="font-family: sans-serif;">The principles that guide everything we do</p>
    </div>
    <div class="row mt-5">
        <div class="col-md-4 col-12 p-3 mb-3">
            <p class="fs-4">Quality</p>
            <p class="fs-6 text-secondary" style="font-family: sans-serif;">We believe in creating pieces that last. From selecting premium materials to perfecting every stitch, quality is at the heart of everything we do.</p>
        </div>
        <div class="col-md-4 col-12 p-3 mb-3">
            <p class="fs-4">Sustainability</p>
            <p class="fs-6 text-secondary" style="font-family: sans-serif;">We're committed to reducing our environmental impact. We use sustainable materials and ethical production methods to create fashion you can feel good about.</p>
        </div>
        <div class="col-md-4 col-12 p-3 mb-3">
            <p class="fs-4">Timelessness</p>
            <p class="fs-6 text-secondary" style="font-family: sans-serif;">We design for longevity, not trends. Our pieces are created to be versatile, enduring, and to become the foundation of your wardrobe for years to come.</p>
        </div>
    </div>
</section>

{{-- section Team --}}
<section class="container text-center mb-5">
    <div class="title">
        <p class="fs-2">Our Team</p>
    </div>
    <div class="row">
        <div class="col-md-4 col-12 p-3 mb-3">
            <img src="assets/person-1.jpg" width="384" alt="duta">
            <p class="name fs-5 text-secondary">Duta</p>
            <p class="position fs-7" style="font-family: sans-serif;">Founder & Creative Director</p>
        </div>
        <div class="col-md-4 col-12 p-3 mb-3">
            <img src="assets/person-2.jpg" width="384" alt="suksesi">
            <p class="name fs-5 text-secondary">Duta Suksesi Fahthurrahman</p>
            <p class="position fs-7" style="font-family: sans-serif;">Head of Design</p>
        </div>
        <div class="col-md-4 col-12 p-3 mb-3">
            <img src="assets/person-3.jpg" width="384" alt="fathurrahman">
            <p class="name fs-5 text-secondary">Fathurrahman</p>
            <p class="position fs-7" style="font-family: sans-serif;">Sustainability Lead</p>
        </div>
    </div>
</section>
{{-- section Join --}}
<section class="container d-flex justify-content-center align-items-center flex-column text-center text-light bg-dark pt-5 pb-5 mb-5">
    <div class="w-75">
        <p class="fs-2 pt-5">Join Our Journey</p>
        <p class="fs-5 text-secondary" style="font-family: sans-serif;">We're building a community of individuals who value quality, sustainability, and timeless style. Follow us on social media to stay updated on new collections and behind-the-scenes content.</p>
        <div class="d-flex justify-content-center gap-3 pb-5">
            <a class="nav-link" href="#"><i class="fa-brands fa-instagram"></i></a>
            <a class="nav-link" href="#"><i class="fa-brands fa-square-facebook"></i></a>
            <a class="nav-link" href="#"><i class="fa-brands fa-x-twitter"></i></a></div>
    </div>
</section>
@endsection
