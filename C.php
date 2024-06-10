<?php
/**
 * Menghitung banyaknya huruf dalam string yang diberikan dan mengurutkannya sesuai abjad
 *
 * @param string $input String yang akan diperiksa
 * @return array Hasil akhir berupa array yang terurut dengan jumlah kemunculan setiap huruf
 */
function count_and_sort_characters($input) {
    // Array untuk menyimpan jumlah kemunculan setiap huruf
    $charCount = [];
    
    // Menghitung jumlah kemunculan setiap huruf
    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];
        if (ctype_alpha($char)) { // Memastikan karakter adalah huruf
            if (!isset($charCount[$char])) {
                $charCount[$char] = 0;
            }
            $charCount[$char]++;
        }
    }
    
    // Mengurutkan array berdasarkan key (huruf) sesuai abjad
    ksort($charCount);
    
    return $charCount;
}

// Contoh penggunaan
$examples = [
    "Hello World",  // Output: ["d" => 1, "e" => 1, "H" => 1, "l" => 3, "o" => 2, "r" => 1, "W" => 1]
    "Bismillah",    // Output: ["a" => 1, "B" => 1, "h" => 1, "i" => 2, "l" => 2, "m" => 1, "s" => 1]
    "MasyaAllah"    // Output: ["A" => 1, "a" => 3, "h" => 1, "l" => 2, "M" => 1, "s" => 1, "y" => 1]
];

foreach ($examples as $example) {
    echo "Input: \"$example\"\n";
    $result = count_and_sort_characters($example);
    echo "Output: [";
    foreach ($result as $char => $count) {
        echo "\"$char\":$count, ";
    }
    echo "]\n\n";
}
?>
