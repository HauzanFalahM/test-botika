<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan - SantriKoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('karyawan.create') }}" class="btn btn-md btn-success mb-3">Tambah Karyawan</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col" style="width: 20%">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($karyawans as $karyawan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $karyawan->nama }}</td>
                                        <td>{{ $karyawan->email }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('karyawan.destroy', $karyawan->id) }}" method="POST">
                                                <a href="{{ route('karyawan.show', $karyawan->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('karyawan.edit', $karyawan->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">Data karyawan belum tersedia.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $karyawans->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>