<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Barang</title>
</head>
<body>
    <h2>Formulir Tambah Barang Inventaris Kantor</h2>

    {{--panggil kondisi bawaan laravel jika data berhasil disimpan muncul --}}
    @if(session('success'))
       <div>{{session('success')}}
    @endif

    {{--formulir mengarah ke route store milih item--}}
    <form action="{{ route('items.store') }}" method="POST">
        @csrf {{--wajib ada di form laravel--}}
        
        <label>Kode Barang:</label>
        <input type="text" name="code" required placeholder="contoh: Inv-001">
        <br>

        <label>Nama Barang:</label>
        <input type="text" name="items_name" required placeholder="contoh: laptop">
        <br>

        <label>kategori:</label>
        <input type="text" name="category" required placeholder="contoh: Elektronik">
        <br>

        <label>Stok:</label>
        <input type="number" name="stock" required value="1">
        <br>

        <label>Kondisi</label>
        <select name="condition">
            <option value="baik">baik</option>
            <option value="Rusak Ringan">Rusak Ringan</option>
            <option value="Rusak Parah">Rusak Parah</option>
</select>
<br>

<label>Lokasi Ruangan:</label>
<input type="text" name="room_location" placeholder="contoh:ruang IT lt 3">
<br>

<button type="submit">Simpan Barang</button>
<br>
</form>


</body>
</html>