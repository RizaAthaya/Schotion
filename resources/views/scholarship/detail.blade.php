<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/scholarship/detail.css') }}">
    <title>detail</title>
</head>

<body>
    @include('navbar')

    <div class="detailScholar">
        <div class="header-gambar">
            <img src="{{ $scholarship->link_gambar }}" alt="Gambar {{ $scholarship->nama }}">
        </div>
        <div class="konten-kontainer">
            <div class="judul">
                <h1>{{ $scholarship->nama }}</h1>
            </div>
            <div class="kategori">
                <p>Kategori: {{$scholarship->kategori->nama }}</p>
            </div>
            <div class="penyelenggara">
                <p>Penyelenggara: {{$scholarship->penyelenggara}}</p>
            </div>
            <div class="deskripsi">
                <p>
                    {!! nl2br($scholarship->deskripsi) !!}
                </p>

            </div>
            <div class="tanggal-mulai">
                <p>Tanggal mulai: {{$scholarship -> tanggal_mulai}}
                <p>
            </div>
            <div class="tanggal-selesai">
                <p>Tanggal selesai: {{$scholarship -> tanggal_berakhir}}</p>
            </div>
        </div>

    </div>


    @include('footer')
</body>

</html>