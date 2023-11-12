<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/admin/scholarship/show.css') }}">
    <title>Daftar Beasiswa</title>
</head>

<body>
    @include('navbar')

    <!-- Content --------------------------------------------------------------------------------------->
    <div class="showScholar">
        <div class="text">
            <div class="header">
                <h1 class="heading">Scholarship Information</h1>
                <a href="{{ url('/admin/scholarship/create') }}" class="add">+</a>
            </div>
            <div class="deskripsi">
                <p>To create, update or delete scholarship information</p>
            </div>
        </div>

        <div class="tableCon">
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
                    @foreach ($beasiswa as $item)
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
                                    <a href="{{ url('/admin/scholarship/edit/' . $item->id_beasiswa) }}"
                                        class="btn edit">Edit</a>
                                    <form action="{{ url('/admin/scholarship/delete/' . $item->id_beasiswa) }}" method="post"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn delete"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus beasiswa ini?')">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <!-- Footer --------------------------------------------------------->

    @include('footer')
</body>

</html>
