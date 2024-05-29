<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Divisi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Data Divisi</h2>
        <a href="{{ route('divisi.create') }}" class="btn btn-success mb-3">Tambah Divisi</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($divisi as $divisi)
                    <tr>
                        <td>{{ $divisi->nama }}</td>
                        <td>
                            <a href="{{ route('divisi.show', $divisi->id) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('divisi.edit', $divisi->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('divisi.destroy', $divisi->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $divisi->links() }}
    </div>
</body>
</html>
