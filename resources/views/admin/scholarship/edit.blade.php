<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Form Edit Scholarship Information</title>
    <link rel="stylesheet" href="{{ asset('css/scholarship/edit.css') }}">
</head>

<body>

    @include('navbar')

    <div class="editScholarship">
        <div class="header">
            <h1>Edit Scholarship Form</h1>
            <p>Fill the blank to edit a scholarship information</p>
        </div>
        <div class="form-grid">
            <form action="{{ route('scholarship.update', ['id' => $beasiswa->id_beasiswa]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="container-grid">
                    <div class="left-grid">
                        <!-- Kolom kiri -->
                        <div class="form-group">
                            <label for="nama">Name</label>
                            <input type="text" id="nama" name="nama" required placeholder="Scholarship Name"
                                value="{{ $beasiswa->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_mulai">Start Date</label>
                            <input type="date" id="tanggal_mulai" name="tanggal_mulai" required
                                value={{ $beasiswa->tanggal_mulai }}>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_berakhir">End Date</label>
                            <input type="date" id="tanggal_berakhir" name="tanggal_berakhir" required
                                value={{ $beasiswa->tanggal_berakhir }}>
                        </div>
                        <div class="form-group">
                            <label for="penyelenggara">Providers</label>
                            <input type="text" id="penyelenggara" name="penyelenggara" required
                                value="{{ $beasiswa->penyelenggara }}" placeholder="Providers">
                        </div>
                        <div class="form-group">
                            <label for="id_kategori_beasiswa">Category</label>
                            <select id="id_kategori_beasiswa" name="id_kategori_beasiswa" required>
                                <option value="" disabled>Select Category</option>
                                @foreach ($kategori as $category)
                                    <option value="{{ $category->id_kategori_beasiswa }}"
                                        @if ($category->id_kategori_beasiswa == $beasiswa->id_kategori_beasiswa) selected @endif>
                                        {{ $category->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="right-grid">
                        <!-- Kolom kanan -->
                        <div class="form-group">
                            <label for="deskripsi">Description</label>
                            <textarea id="deskripsi" name="deskripsi" class="description-textarea" required>{{ $beasiswa->deskripsi }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="link_gambar">Image Link</label>
                            <input type="text" id="link_gambar" name="link_gambar" required
                                value={{ $beasiswa->link_gambar }} placeholder="Link image">
                        </div>
                        <div class="button-container">
                            <button type="submit">Update Scholarship</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @include('footer')

</body>

</html>
