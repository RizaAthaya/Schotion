<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/admin/account/show.css') }}">
    <title>Daftar pengguna</title>
</head>

<body>
    @include('navbar')

    <!-- Content --------------------------------------------------------------------------------------->
    <div class="showAccount">
        <div class="text">
            <div class="header">
                <h1 class="heading">Account Information</h1>
                <a href="{{ url('/admin/account/create') }}" class="add">+</a>
            </div>
            <div class="deskripsi">
                <p>To create, update or delete account information</p>
            </div>
        </div>

        <div class="tableCon">
            @if (count($pengguna) > 0)

                <table class="custom">
                    <!-- headers tabel -->
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- data -->
                        @foreach ($pengguna as $item)
                            <tr class="row">
                                <td>{{ $item->id_pengguna }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->role }}</td>
                                <!-- Edit and Delete buttons-->
                                <td>
                                    <div class="btn-group actions">
                                        <a href="{{ url('/admin/account/edit/' . $item->id_pengguna) }}"
                                            class="btn edit">Edit</a>
                                        <form action="{{ url('/admin/account/delete/' . $item->id_pengguna) }}"
                                            method="post" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn delete"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Delete</button>
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
