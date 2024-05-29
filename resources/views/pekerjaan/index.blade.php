<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pekerjaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Data Pekerjaan</h2>
        <a href="{{ route('pekerjaan.create') }}" class="btn btn-success mb-3">Tambah Pekerjaan</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pekerjaan as $pekerjaan)
                    <tr>
                        <td>{{ $pekerjaan->nama }}</td>
                        <td>
                            <a href="{{ route('pekerjaan.show', $pekerjaan->id) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('pekerjaan.edit', $pekerjaan->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('pekerjaan.destroy', $pekerjaan->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $pekerjaan->links() }}
    </div>
</body>
</html>
