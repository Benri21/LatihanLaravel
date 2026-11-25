@extends('layout.master')
@section('konten')
<div class="container py-5">

        <!-- Header -->
        <div class="text-center mb-5">
            <h1 class="fw-bold text-primary">{{ $judul }}</h1>
            <p class="text-secondary">Kenali lebih dekat tentang kami</p>
        </div>

        <!-- About Card -->
        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card border-0 shadow-sm">

                    <div class="card-body p-5">

                        <h3 class="fw-bold mb-3">
                            {{ $nama }}
                        </h3>

                        <p class="text-secondary">
                            {{ $deskripsi }}
                        </p>

                        <hr>

                        <div class="d-flex justify-content-between align-items-center">

                            <span class="badge bg-primary">
                                Laravel 12
                            </span>

                            <a href="/home" class="btn btn-outline-primary">
                                Kembali ke Home
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection