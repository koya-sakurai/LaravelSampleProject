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

## DBのセットアップ
### 1. DBテーブルを作成
```
php artisan migrate

# 削除したい時は
php artisan migrate:reset
```
### 2. 初期データを登録
```
php artisan db:seed
```

## ファイルの追加
コマンドを使うと楽に追加できる
```
# Controller
php artisan make:controller XXXXXController

# migration
php artisan make:migration create_XXXXX_table

# seeder
php artisan make:seeder XXXXXTableSeeder

```
