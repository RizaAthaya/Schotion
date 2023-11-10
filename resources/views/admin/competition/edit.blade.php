<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Form Edit competition Information</title>
    <link rel="stylesheet" href="{{ asset('css/admin/competition/edit.css') }}">
</head>

<body>

    @include('navbar')

    <div class="editCompetition">
        <div class="header">
            <h1>Edit competition Form</h1>
            <p>Fill the blank to edit a competition information</p>
        </div>
        <div class="form-grid">
            <form action="{{ route('admin.competition.update', ['id' => $lomba->id_lomba]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="container-grid">
                    <div class="left-grid">
                        <!-- Kolom kiri -->
                        <div class="form-group">
                            <label for="nama">Name</label>
                            <input type="text" id="nama" name="nama" required placeholder="competition Name"
                                value="{{ $lomba->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_mulai">Start Date</label>
                            <input type="date" id="tanggal_mulai" name="tanggal_mulai" required
                                value={{ $lomba->tanggal_mulai }}>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_berakhir">End Date</label>
                            <input type="date" id="tanggal_berakhir" name="tanggal_berakhir" required
                                value={{ $lomba->tanggal_berakhir }}>
                        </div>
                        <div class="form-group">
                            <label for="penyelenggara">Providers</label>
                            <input type="text" id="penyelenggara" name="penyelenggara" required
                                value="{{ $lomba->penyelenggara }}" placeholder="Providers">
                        </div>
                        <div class="form-group">
                            <label for="id_kategori_lomba">Category</label>
                            <select id="id_kategori_lomba" name="id_kategori_lomba" required>
                                <option value="" disabled>Select Category</option>
                                @foreach ($kategori as $category)
                                    <option value="{{ $category->id_kategori_lomba }}"
                                        @if ($category->id_kategori_lomba == $lomba->id_kategori_lomba) selected @endif>
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
                            <textarea id="deskripsi" name="deskripsi" class="description-textarea" required>{{ $lomba->deskripsi }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="link_gambar">Image Link</label>
                            <input type="text" id="link_gambar" name="link_gambar" required
                                value={{ $lomba->link_gambar }} placeholder="Link image">
                        </div>
                        <div class="button-container">
                            <button type="submit">Update competition</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @include('footer')

</body>

</html>
