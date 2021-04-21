@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {
        background: linear-gradient(to right, #fc5c7d, #6a82fb);
    }

    .btn-purple {
        background: #6A82FB;
        width: 100%;
        color: #fff;
        font-weight: 600;
    }

    .btn-purple:hover {
        background: #FC5C7D;
        width: 100%;
        color: #fff;
        font-weight: 600;
    }

  

</style>
@endsection

@section('title', 'Halaman Daftar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h2 class="text-center text-white mb-0 mt-5">PM</h2>
            <P class="text-center text-white mb-5">Pengaduan Masyarakat</P>
            <div class="card mt-5">
                <div class="card-body">
                    <h2 class="text-center mb-4">FORM DAFTAR</h2>
                    <form action="{{ route('pekat.register') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="number" value="{{ old('nik') }}" name="nik" placeholder="NIK" class="form-control @error('nik') is-invalid @enderror">
                            @error('nik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{ old('nama') }}" name="nama" placeholder="Nama Lengkap" class="form-control @error('nama') is-invalid @enderror">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" value="{{ old('email') }}" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{ old('username') }}" name="username" placeholder="Username" class="form-control @error('username') is-invalid @enderror">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="number" value="{{ old('umur') }}" name="umur" placeholder="Umur" class="form-control @error('umur') is-invalid @enderror">
                            @error('umur')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>                        
                        <div class="form-group">
                            <input type="text" value="{{ old('alamat') }}" name="alamat" placeholder="Alamat" class="form-control @error('alamat') is-invalid @enderror">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="number" value="{{ old('telp') }}" name="telp" placeholder="No. Telp" class="form-control @error('telp') is-invalid @enderror">
                            @error('telp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-purple">DAFTAR</button>
                    </form>
                </div>
            </div>
            @if (Session::has('pesan'))
                <div class="alert alert-danger my-2">
                    {{ Session::get('pesan') }}
                </div>
            @endif
            <a href="{{ route('pekat.index') }}" class="btn btn-danger text-white mt-3" style="width: 100%; font-weight: 600">Kembali ke Halaman Utama</a>
        </div>
    </div>
</div>
@endsection
