<?php
// Kerjakan mulai dari sini
include 'hitung.php';
$_SESSION["nama"] = '$nama';


// JANGAN DIUBAH IF INI
if (!isset($_SESSION["nama"])) {
    echo "<p>Belum ada pesanan.</p>";
} else {
    // Kerjakan ELSE ini
    echo "<p>Struk belanja.</p>";
    echo "<table>
    <tr>
        <th>Minuman</th>
        <th>Harga</th>
    </tr>
    <tr>
        <td>"?>
        <?php 
        echo $menu?>
        <?php echo "</td> <td>"?>
        <?php
        echo $jumlah?>
        <?php echo "</td> <td>"?>
        <?php 
        echo $total?>
        <?php echo "</td>"?>
        <?php echo"
    </tr>
</table>";
    echo "";
}