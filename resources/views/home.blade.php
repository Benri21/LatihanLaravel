@extends('layout.master')
@section('konten')
    <div class="container py-5">

        <!-- Welcome Section -->
        <div class="p-5 mb-4 bg-white rounded-3 shadow-sm">

            <div class="container-fluid py-3">

                <h1 class="display-5 fw-bold">
                    Welcome to Laravel 12!
                </h1>

                <p class="col-md-8 fs-5 text-secondary">
                    Selamat datang di halaman utama website saya.
                    Website ini dibuat menggunakan Laravel dan Bootstrap 5.3.
                </p>

                <button class="btn btn-primary btn-lg" type="button">
                    Get Started
                </button>

            </div>

        </div>

        <!-- Information Cards -->
        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-md-4">

                <div class="card shadow-sm h-100 border-0">

                    <div class="card-body p-4">

                        <h5 class="card-title fw-bold">
                            About Us
                        </h5>

                        <p class="card-text text-secondary">
                            Pelajari lebih lanjut mengenai website dan tujuan pembuatannya.
                        </p>

                        <a href="/about" class="btn btn-outline-primary">
                            Read More
                        </a>

                    </div>

                </div>

            </div>

            <!-- Card 2 -->
            <div class="col-md-4">

                <div class="card shadow-sm h-100 border-0">

                    <div class="card-body p-4">

                        <h5 class="card-title fw-bold">
                            Our Services
                        </h5>

                        <p class="card-text text-secondary">
                            Temukan berbagai layanan dan informasi yang tersedia.
                        </p>

                        <a href="#" class="btn btn-outline-primary">
                            Explore
                        </a>

                    </div>

                </div>

            </div>

            <!-- Card 3 -->
            <div class="col-md-4">

                <div class="card shadow-sm h-100 border-0">

                    <div class="card-body p-4">

                        <h5 class="card-title fw-bold">
                            Contact Us
                        </h5>

                        <p class="card-text text-secondary">
                            Hubungi kami jika memiliki pertanyaan atau membutuhkan informasi.
                        </p>

                        <a href="/contact" class="btn btn-outline-primary">
                            Contact
                        </a>

                    </div>

                </div>

            </div>

        </div>

        <!-- Footer -->
        <footer class="text-center mt-5 text-secondary">

            <hr>

            <p class="mb-0">
                &copy; 2026 Learn Laravel 12. All Rights Reserved.
            </p>

        </footer>

    </div>
@endsection