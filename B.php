<?php
/**
 * Menghitung berapa banyak pola yang ada di dalam teks
 *
 * @param string $text Teks yang akan diperiksa
 * @param string $pattern Pola yang akan dicari
 * @return int Jumlah pola yang ditemukan di dalam teks
 */
function pattern_count($text, $pattern) {
    // Panjang teks dan pola
    $textLength = strlen($text);
    $patternLength = strlen($pattern);
    
    // Jika pola kosong atau lebih panjang dari teks, langsung kembalikan 0
    if ($patternLength == 0 || $patternLength > $textLength) {
        return 0;
    }
    
    $count = 0;
    
    // Loop melalui teks untuk mencari pola
    for ($i = 0; $i <= $textLength - $patternLength; $i++) {
        $match = true;
        // Cek apakah pattern cocok dengan bagian dari teks
        for ($j = 0; $j < $patternLength; $j++) {
            if ($text[$i + $j] != $pattern[$j]) {
                $match = false;
                break;
            }
        }
        if ($match) {
            $count++;
        }
    }
    
    return $count;
}

// Contoh penggunaan
$examples = [
    ["palindrom", "ind"], // Output: 1
    ["abakadabra", "ab"], // Output: 2
    ["hello", ""],        // Output: 0
    ["ababab", "aba"],    // Output: 2
    ["aaaaaa", "aa"],     // Output: 5
    ["hell", "hello"]     // Output: 0
];

foreach ($examples as $example) {
    list($text, $pattern) = $example;
    echo "Input: \"$text\", \"$pattern\"\n";
    echo "Output: " . pattern_count($text, $pattern) . "\n\n";
}
?>
