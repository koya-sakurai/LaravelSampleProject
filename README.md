# Laravel Sample Project
## Cloneした後のセットアップ手順
### 1. composerでパッケージをインストールする
```
composer install
```
### 2. 環境設定ファイルを作成
`.env.XXXXX` を `.env` にリネームする
### 3. 環境設定ファイルのAPP_KEYを設定
```
php artisan key:generate
```
※APP_KEYが空だとエラーになるため（`No application encryption key has been specified.`）
