<?php
// Array yang akan diurutkan
$array = [12, 9, 30, "A", "M", 99, 82, "J", "N", "B"];

// Pisahkan antara string dan angka
$letters = [];
$numbers = [];

foreach ($array as $element) {
    if (is_numeric($element)) {
        $numbers[] = $element;
    } else {
        $letters[] = $element;
    }
}

// Urutkan masing-masing array
sort($letters);
sort($numbers);

// Gabungkan kembali array yang telah diurutkan
$sortedArray = array_merge($letters, $numbers);

// Tampilkan hasilnya dalam satu baris
echo "[" . implode(", ", $sortedArray) . "]";
?>
