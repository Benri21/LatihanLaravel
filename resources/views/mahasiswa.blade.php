@extends ('layout.master')
@section('konten')
 <h2>Daftar Mahasiswa</h2>
 <hr>

 <a href="#" class="btn btn-primary mb-3">
     Tambah Mahasiswa
 </a>
   <!-- Kotak Info Biru (Alert Primary) -->
    <div class="alert alert-primary" role="alert">
        <strong>Fakultas :</strong> {{ $fakultas }}<br>
        <strong>Program Studi :</strong> {{ $program_studi }}<br>
        <strong>Tahun Akademik :</strong> {{ $tahun_akademik }}
    </div>

    <!-- BAGIAN TABEL DATA MAHASISWA -->
     <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Data Mahasiswa</h5>
        </div>

        <div class="card-body">
             <table class="table table-bordered table-striped mb-0">
             <thead>
            <!-- Isi tabel data mahasiswa -->
             
                <tr>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama Mahasiswa</th>
                    <th>Angkatan</th>
                    <th>Aksi</th>   
                </tr>
                </thead>
                <tbody>
                @foreach ($mahasiswas as $no => $mhs)
                <tr>
                    <td>{{ $no + 1 }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->angkatan }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
             </table>
        </div>
    </div>

@endsection