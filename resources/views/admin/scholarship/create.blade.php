<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Form Add Scholarship Information</title>
    <link rel="stylesheet" href="{{ asset('css/admin/scholarship/create.css') }}">
</head>

<body>

    @include('navbar')

    <div class="createScholarship">
        <div class="header">
            <h1>Create Scholarship Form</h1>
            <p>Fill the blank to create a valid scholarship information</p>
        </div>
        <div class="form-grid">
            <form action="/admin/scholarship/store" method="post">
                @csrf
                <div class="container-grid">
                    <div class="left-grid">
                        <!-- Kolom kiri -->
                        <div class="form-group">
                            <label for="nama">Name</label>
                            <input type="text" id="nama" name="nama" required placeholder="Scholarship Name">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_mulai">Start Date</label>
                            <input type="date" id="tanggal_mulai" name="tanggal_mulai" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_berakhir">End Date</label>
                            <input type="date" id="tanggal_berakhir" name="tanggal_berakhir" required>
                        </div>
                        <div class="form-group">
                            <label for="penyelenggara">Providers</label>
                            <input type="text" id="penyelenggara" name="penyelenggara" required
                                placeholder="Providers">
                        </div>
                        <div class="form-group">
                            <label for="id_kategori_beasiswa">Category</label>
                            <select id="id_kategori_beasiswa" name="id_kategori_beasiswa" required>
                                <option value="" disabled selected>Select Category</option>
                                @foreach ($beasiswa as $category)
                                    <option value="{{ $category->id_kategori_beasiswa }}">{{ $category->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="right-grid">
                        <!-- Kolom kanan -->
                        <div class="form-group">
                            <label for="deskripsi">Description</label>
                            <textarea id="deskripsi" name="deskripsi" class="description-textarea" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="link_gambar">Image Link</label>
                            <input type="text" id="link_gambar" name="link_gambar" required placeholder="Link image">
                        </div>
                        <div class="button-container">
                            <button type="submit">Add Scholarship</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @include('footer')

</body>

</html>
