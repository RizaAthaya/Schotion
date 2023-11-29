<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/competition/detail.css') }}">
    <title>detail</title>
</head>

<body>
    @include('navbar')

    <div class="detailCompe">
        <div class="header-gambar">
            <img src="{{ $competition->link_gambar }}" alt="Gambar {{ $competition->nama }}">
        </div>
        <div class="konten-kontainer">
            <div class="judul">
                <h1>{{ $competition->nama }}</h1>
            </div>
            <div class="kategori">
                <p>Kategori: {{$competition->kategori->nama }}</p>
            </div>
            <div class="penyelenggara">
                <p>Penyelenggara: {{$competition->penyelenggara}}</p>
            </div>
            <div class="deskripsi">
                <p>
                    {!! nl2br($competition->deskripsi) !!}
                </p>

            </div>
            <div class="tanggal-mulai">
                <p>Tanggal mulai: {{$competition -> tanggal_mulai}}
                <p>
            </div>
            <div class="tanggal-selesai">
                <p>Tanggal selesai: {{$competition -> tanggal_berakhir}}</p>
            </div>
        </div>

    </div>


    @include('footer')
</body>

</html>