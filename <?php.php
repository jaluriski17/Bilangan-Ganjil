<?php

// Minta pengguna untuk memasukkan baris bilangan
echo "Masukkan baris bilangan (pisahkan dengan spasi): ";
$input = trim(fgets(STDIN));

// Pisahkan baris bilangan menjadi array
$bilanganArray = explode(' ', $input);

// Hitung jumlah bilangan ganjil
$jumlahBilanganGanjil = hitungBilanganGanjil($bilanganArray);

echo "Jumlah bilangan ganjil dalam baris tersebut adalah: $jumlahBilanganGanjil\n";

// Fungsi untuk menghitung jumlah bilangan ganjil
function hitungBilanganGanjil($bilanganArray) {
    $jumlahBilanganGanjil = 0;

    foreach ($bilanganArray as $bilanganStr) {
        // Coba mengonversi string ke bilangan bulat
        $bilangan = intval($bilanganStr);

        // Jika konversi berhasil dan bilangan tersebut ganjil, tambahkan ke jumlah bilangan ganjil
        if (is_int($bilangan) && $bilangan % 2 != 0) {
            $jumlahBilanganGanjil++;
        }
    }

    return $jumlahBilanganGanjil;
}
?>
