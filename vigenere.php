<?php
// Fungsi untuk mengenkripsi teks dengan Vigenere Cipher
function vigenereEncrypt($text, $key)
{
    $text = strtoupper($text);
    $key = strtoupper($key);
    $encryptedText = '';
    $keyLength = strlen($key);

    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        if (ctype_alpha($char)) {
            $encryptedChar = chr(((ord($char) - 65 + ord($key[$i % $keyLength]) - 65) % 26) + 65);
            $encryptedText .= $encryptedChar;
        } else {
            $encryptedText .= $char;
        }
    }

    return $encryptedText;
}

// Fungsi untuk mendekripsi teks dengan Vigenere Cipher
function vigenereDecrypt($text, $key)
{
    $text = strtoupper($text);
    $key = strtoupper($key);
    $decryptedText = '';
    $keyLength = strlen($key);

    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        if (ctype_alpha($char)) {
            $decryptedChar = chr(((ord($char) - 65 - (ord($key[$i % $keyLength]) - 65) + 26) % 26) + 65);
            $decryptedText .= $decryptedChar;
        } else {
            $decryptedText .= $char;
        }
    }

    return $decryptedText;
}

// Contoh penggunaan enkripsi Vigenere Cipher
$plaintext = "Prasetyo";
$key = "KUY";

$encryptedText = vigenereEncrypt($plaintext, $key);
echo "Teks Terenkripsi: $encryptedText<br>";

$decryptedText = vigenereDecrypt($encryptedText, $key);
echo "Teks Terdekripsi: $decryptedText<br>";
