<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/admin/account/create.css') }}">
    <title>Form Edit Admin Account</title>
</head>

<body>

    @include('navbar')

    <div class="createAccount">
        <div class="header">
            <h1>Edit account Form</h1>
            <p>Fill the blank to update a valid account</p>
        </div>
        <div class="form-grid">
            <form action="{{ route('admin.account.update', ['id' => $pengguna->id_pengguna]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="left-grid">
                    <!-- Kolom kiri -->
                    <div class="form-group">
                        <label for="nama_lengkap">Name</label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" required placeholder="Admin name"
                            value="{{ $pengguna->nama_lengkap }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" required placeholder="Email"
                            value="{{ $pengguna->email }}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="password baru">
                    </div>
                    <div class="form-group">
                        <label for="id_peran">Role</label>
                        <select id="id_peran" name="id_peran" required>
                            <option value="" disabled selected>Select Role</option>
                            @foreach ($peran as $role)
                                <option value="{{ $role->id_peran }}" @if ($role->id_peran == $pengguna->id_peran) selected @endif>
                                    {{ $role->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="button-container">
                        <button type="submit">Edit account</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @include('footer')

</body>

</html>
