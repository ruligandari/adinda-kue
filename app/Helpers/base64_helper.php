<?php
function encode($plainText) // Mendefinisikan fungsi encode yang menerima satu parameter $teks
{
    // AK25132123
    $base64Table = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/';
    $asciiCodes = [];
    $binaryString = '';

    // 1. Konversi setiap karakter ke ASCII
    for ($i = 0; $i < strlen($plainText); $i++) {
        $asciiCodes[] = ord($plainText[$i]);
    }

    // 2. Ubah kode ASCII menjadi biner 8-bit
    foreach ($asciiCodes as $ascii) {
        $binaryString .= str_pad(decbin($ascii), 8, '0', STR_PAD_LEFT);
    }

    // 3. Bagi biner menjadi blok 6-bit
    $binaryString = str_split($binaryString, 6);

    // 4. Tambahkan padding jika panjang biner tidak kelipatan 6
    $lastBlockLength = strlen(end($binaryString));
    if ($lastBlockLength < 6) {
        $binaryString[count($binaryString) - 1] = str_pad(end($binaryString), 6, '0', STR_PAD_RIGHT);
    }

    // 5. Konversi setiap blok 6-bit ke desimal
    $base64String = '';
    foreach ($binaryString as $binary) {
        $decimalValue = bindec($binary);
        $base64String .= $base64Table[$decimalValue];
    }

    // 6. Tambahkan padding '=' jika panjang biner awal tidak kelipatan 24
    while (strlen($base64String) % 4 !== 0) {
        $base64String .= '=';
    }

    return $base64String;
}

function decode($encodedText) // Mendefinisikan fungsi decode yang menerima satu parameter $teks_enkripsi
{
    $base64Table = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/';
    $binaryString = '';

    // 1. Hilangkan padding '='
    $encodedText = rtrim($encodedText, '=');

    // 2. Ubah setiap karakter Base64 menjadi desimal, lalu ke biner 6-bit
    for ($i = 0; $i < strlen($encodedText); $i++) {
        $index = strpos($base64Table, $encodedText[$i]);
        $binaryString .= str_pad(decbin($index), 6, '0', STR_PAD_LEFT);
    }

    // 3. Gabungkan blok biner 8-bit
    $binaryString = str_split($binaryString, 8);

    // 4. Konversi biner 8-bit ke ASCII
    $decodedText = '';
    foreach ($binaryString as $binary) {
        $decodedText .= chr(bindec($binary));
    }

    return $decodedText;
}
