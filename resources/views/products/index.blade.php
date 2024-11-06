<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->qty }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    <a href="{{ route('product.edit', ['product' => $product]) }}">Edit</a>
                </td>
                <td>
                    <!-- Form untuk Hapus Produk -->
                    <form method="POST" action="{{ route('product.destroy', ['product' => $product]) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" onclick="return confirm('Yakin ingin menghapus produk ini?')" />
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>