<?php
$data = $argv[1]; // 暗号化するデータ
$key = getenv('ENC_KEY'); // 128ビット（16バイト）の鍵

// AES-128-ECB暗号化
$encrypted = openssl_encrypt($data, 'AES-128-ECB', $key);

print($encrypted);
print("\n");
?>
