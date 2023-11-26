<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/competition.css">
    <title>competition</title>
</head>

<body>
    @include('navbar')

    <div class="competition">
        <div class="search-container">
            <div class="header-image">
                <img src="https://img.freepik.com/free-vector/city-nature-park-with-train-skyline-landscape-scene_1308-49537.jpg?size=626&ext=jpg&ga=GA1.1.893700710.1683556744&semt=ais" alt="recipe-header">
            </div>
            <h1>Competition</h1>
            <p>
                Explore the various competition categories we offer. </br>
                Engage in challenges that push the boundaries of your skills, </br>interact with a passionate community, and seize the opportunity to win exciting prizes.</p>



        </div>
        <div class="menu">
            <button class="tombol" onclick="showContent('all')">All</button>
            @foreach ($categories as $category)
            <button class="tombol" onclick="showContent('{{ $category->nama }}')">{{ $category->nama }}</button>
            @endforeach
        </div>

        <div class="all-categories">
            @foreach ($categories as $category)
            <div id="{{ strtolower($category->nama) }}-content" class="konten tambahan" >
                @foreach ($competition as $item)
                @if ($category->nama == 'all' || $item->kategori->nama == $category->nama)
                <div class="tampilan-card">
                    <div class="gambar">
                        <img src="{{ $item->link_gambar }}" alt="Gambar {{ $item->nama }}">
                    </div>
                    <div class="judul">{{ $item->nama }}</div>
                    <div class="isi-konten">
                        {{ $item->deskripsi }}
                    </div>
                    <button class="tombol">More</button>
                </div>
                @endif
                @endforeach
            </div>
            @endforeach

        </div>



        <script>
            function showContent(category) {
                // Tampilkan konten sesuai dengan kategori yang dipilih
                var allContents = document.getElementsByClassName('konten');

                if (category == 'all') {
                    // Jika kategori "all" dipilih, tampilkan semua konten
                    for (var i = 0; i < allContents.length; i++) {
                        allContents[i].style.display = 'flex';
                        allContents[i].style.flexWrap = 'wrap';
                        // document.getElementById(category.toLowerCase()).style.display = 'flex';
                    }
                } else {
                    // Jika kategori selain "all" dipilih, sembunyikan semua konten
                    hideAllContent();

                    // Tampilkan konten sesuai dengan kategori yang dipilih
                    document.getElementById(category.toLowerCase() + '-content').style.display = 'flex';
                }
            }

            function hideAllContent() {
                // Sembunyikan semua konten
                var allContents = document.getElementsByClassName('konten');
                for (var i = 0; i < allContents.length; i++) {
                    allContents[i].style.display = 'none';
                }
            }
        </script>






        <div class="spasing"></div>


    </div>




    @include('footer')

</body>

</html>