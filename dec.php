<?php
$data = $argv[1]; // 暗号化するデータ
$key = getenv('ENC_KEY'); // 128ビット（16バイト）の鍵

// AES-128-ECB復号
$decrypted = openssl_decrypt($data, 'AES-128-ECB', $key);

print($decrypted);
print("\n");
?>
