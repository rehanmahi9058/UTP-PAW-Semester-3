<h2>Daftar Menu</h2>
<table>
    <tr>
        <th>Minuman</th>
        <th>Harga</th>
    </tr>
    <tr>
        <td>Kopi Susu Tobi</td>
        <td>Rp18.000</td>
    </tr>
    <tr>
        <td>Americano</td>
        <td>Rp15.000</td>
    </tr>
    <tr>
        <td>Matcha Latte</td>
        <td>Rp22.000</td>
    </tr>
</table>

<h2>Form Pemesanan</h2>
<form action="proses.php" method="post">
    Nama: <!-- Input Text Nama --> 
    <input type="text" name="nama" required><br>
    Minuman: <!-- Input Pilihan Minuman -->
    <input type="text" name="minuman" required><br>
    Jumlah: <!-- Input Jumlah -->
    <input type="number" name="jumlah" required><br>
    Kategori Pelanggan: <!-- Input Pilihan Jenis Pelanggan -->
    <input type="radio" name="jenis_pelanggan" value="Member">Member
    <input type="radio" name="jenis_pelanggan" value="Reguler">Reguler
    
    <!-- Submit --><br>
    <button type="submit">Submit</button>
</form>
