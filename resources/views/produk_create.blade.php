<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk Baru</h1>

    <a href="/produk">Kembali ke Data Produk</a>
    <br><br>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $errors)
                    <li>{{ $errors }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/produk" method="POST">
        @csrf

        <table>
            <tr>
                <td>Nama Produk:</td>
                <td>
                    <input type="text" name="nama_produk" value="{{ old('nama_produk') }}" required>
                </td>
            </tr>
            <tr>
                <td>Kategori:</td>
                <td>
                    <input type="text" name="kategori" value="{{ old('kategori) }}" required>
                </td>
            </tr>
            <tr>
                <td>Harga Satuan:</td>
                <td>
                    <input type="text" name="harga_satuan" step="0.01" min="0" value="{{ old('harga_satuan') }}" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Simpan Produk</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>