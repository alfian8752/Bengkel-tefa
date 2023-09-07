@extends('main')

@section('link')
    <link rel="stylesheet" href="css/toko.css">

@section('body')
    <div class="container">
        <header class="mt-5 m-auto">
            <img src="img/toko-banner.jpg" alt="">
            <h3 class="mt-4">Kami melayani pembelian spare part asli YAMAHA Genuine Part <br> kami pastikan harga kami bersaing dengan bengkel lain.</h3>
        </header>
        <div class="content margin-auto mt-5">
            {{-- <div class="filter">
                <form action="{{ route('toko.sort')->with(['sort' => terendah]) }}" method="post">
                    @csrf
                    <select name="sort" id="sort">
                        <option value="terendah">Harga Terendah</option>
                    </select>
                    <button type="submit">Filter</button>
                </form>
            </div> --}}
            <div class="product-section row gap-5">
                @foreach ($dProduk as $produk)
                    <div class="card">
                        <img src="{{ $produk->gambar }}" alt="">
                        <div class="card-body mt-2">
                            <h4 class="title">{{ $produk->nama }}</h4>
                            <p class="harga">{{ $produk->harga }}</p>
                            <div class="card-actions mt-4 flex-row space-around">
                                <button class="buy"><a href="">Beli</a></button>
                                <button class="cart">Keranjang</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
