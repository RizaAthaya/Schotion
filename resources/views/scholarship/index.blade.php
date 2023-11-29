<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/scholarship/index.css') }}">

    <title>scholarship</title>
</head>

<body>
    @include('navbar')

    <div class = "scholarship">
        <div class = "search-container">
                <div class = "header-image">
                    <img src = "https://bloomerang.co/wp-content/uploads/2015/06/grads-header.png" alt = "recipe-header">
                </div>
            
            <h1>Scholarship</h1>
            <p>
            Don't miss out on this incredible opportunity to further your education and pursue your dreams. <br>
            Apply for our scholarship today and take a step closer to a brighter future.
            </p>
            
        </div>
        <div class="menu">
            <button class="tombol" onclick="showContent('all')">All</button>
            @foreach ($categories as $category)
            <button class="tombol" onclick="showContent('{{ $category->nama }}')">{{ $category->nama }}</button>
            @endforeach
        </div>
        
        <div class="all-categories">
            @foreach ($categories as $category)
            <div id="{{ strtolower($category->nama) }}-content" class="konten tambahan">
                @foreach ($scholarship as $item)
                @if ($category->nama == 'all' || $item->kategori->nama == $category->nama)
                <div class="tampilan-card">
                    <div class="gambar">
                    <img src="{{ $item->link_gambar }}" alt="Gambar {{ $item->nama }}">
                    </div>
                    <div class="judul">{{ $item->nama }}</div>
                    <div class="isi-konten">
                        {{ $item->deskripsi }}
                    </div>
                    <a href="{{ url('/scholarship/detail/' . $item->id_beasiswa) }}" class="tombol">More</a>
                    
                </div>
                @endif
                @endforeach
            </div>
            @endforeach

        </div>

        <script>
            function showContent(category) {
                
                var allContents = document.getElementsByClassName('konten');

                if (category == 'all') {
                    
                    for (var i = 0; i < allContents.length; i++) {
                        allContents[i].style.display = 'flex';
                        allContents[i].style.flexWrap = 'wrap';
                        
                    }
                } else {
                    
                    hideAllContent();

                    
                    document.getElementById(category.toLowerCase() + '-content').style.display = 'flex';
                }
            }

            function hideAllContent() {
                
                var allContents = document.getElementsByClassName('konten');
                for (var i = 0; i < allContents.length; i++) {
                    allContents[i].style.display = 'none';
                }
            }
        </script>

        <div class = "spasing"></div>


    </div>

    

    
    @include('footer')

</body>

</html>
