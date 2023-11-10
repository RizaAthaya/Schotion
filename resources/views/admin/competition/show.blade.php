<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/admin/competition/show.css') }}">
    <title>Daftar lomba</title>
</head>

<body>
    @include('navbar')

    <!-- Content --------------------------------------------------------------------------------------->
    <div class="showCompetition">
        <div class="text">
            <div class="header">
                <h1 class="heading">Competition Information</h1>
                <a href="{{ url('/admin/competition/create') }}" class="add">+</a>
            </div>
            <div class="deskripsi">
                <p>To create, update or delete competition information</p>
            </div>
        </div>

        <div class="tableCon">
            @if (count($lomba) > 0)

                <table class="custom">
                    <!-- headers tabel -->
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Start date</th>
                            <th>End Date</th>
                            <th>Providers</th>
                            <th>Image link</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- data -->
                        @foreach ($lomba as $item)
                            <tr class="row">
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->tanggal_mulai }}</td>
                                <td>{{ $item->tanggal_berakhir }}</td>
                                <td>{{ $item->penyelenggara }}</td>
                                <td>{{ $item->link_gambar }}</td>
                                <td>{{ $item->kategori }}</td>
                                <!-- Edit and Delete buttons-->
                                <td>
                                    <div class="btn-group actions">
                                        <a href="{{ url('/admin/competition/edit/' . $item->id_lomba) }}"
                                            class="btn edit">Edit</a>
                                        <form action="{{ url('/admin/competition/delete/' . $item->id_lomba) }}"
                                            method="post" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn delete"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus lomba ini?')">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="zero">Belum ada data yang diinputkan</p>
            @endif
        </div>
    </div>


    <!-- Footer --------------------------------------------------------->

    @include('footer')
</body>

</html>
