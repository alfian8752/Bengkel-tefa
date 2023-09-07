@extends('main')

@section('link')
    <link rel="stylesheet" href="css/toko.css">

@section('body')
    <div class="container">
        <header class="mt-5">
            <h1>Daftar Barang</h1>
        </header>
        <div class="content margin-auto mt-5">
            <div class="product-section row">
                @foreach ($dProduk as $produk)
                    <div class="card">
                        <img src="{{ $produk->gambar }}" alt="">
                        <div class="card-body mt-2">
                            <h4 class="title">{{ $produk->nama }}</h4>
                            <p class="harga">{{ $produk->harga }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
