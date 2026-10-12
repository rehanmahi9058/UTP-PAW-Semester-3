// Jangan ubah ini!

$nama = $_POST["nama"];
$menu = $_POST["menu"];
$jumlah = (int) $_POST["jumlah"];
$kategori = $_POST["kategori"];

// Kerjakan mulai darisini
if($jumlah>0 && (
    $this->menu == "Kopi Susu Tobi" || 
    $this->menu == "Americano" || 
    $this->menu == "Matcha Latte")){
    $valid = true;
} else {
    $valid = false;
}

if(!$valid){
    $pesangagal = ""Pesanan tidak valid";
    return;
}
$harga = 0;
if($menu == "Kopi Susu Tobi"){
    $harga = 18000;
} else if($menu == "Americano"){
    $harga = 15000;
} else if($menu == "Matcha Latte"){
    $harga = 22000;
}
// Hitung harga

$subtotal = $harga * $jumlah;

// Hitung Diskon
if($kategori == "Member"){
    $diskon = $subtotal * 0.1;
} else {
    $diskon = 0;
}

// total harga
$total = $subtotal - $diskon;

// cek valid

