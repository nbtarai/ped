# PHP Encrypt/Decrypt Runner
暗号方式:AES-128-EBC

# 使い方
デフォルトで設定している暗号キーは"0123456789abcde"です。

変更したい場合はシェル実行時、ENC_KEY環境変数に使用したい暗号キーを指定してください。

- 暗号化

   `./ped.zsh -e [data]`

   ```
   e.g.
   $ ./ped.zsh -e hello
   Z0x+8454yr2c7JwSWCOmOQ==
   ```

- 復号

   `./ped.zsh -d [data]`

   ```
   e.g.
   $ ./ped.zsh -d Z0x+8454yr2c7JwSWCOmOQ==
   hello
   ```

- 暗号キーの変更

   `ENC_KEY=newkey ./ped.zsh -e [data]`

   `ENC_KEY=newkey ./ped.zsh -d [data]`

   ```
   e.g.
   $ ENC_KEY=XXXXXXXXXX000000 ./ped.zsh -e hello
   j51FOpWhartl0xHrmw8GmA==
   ```
