### 12. Bladeテンプレートから

## laravel-study
laravelで掲示板作成

## WindowsでDocker環境で動作させるとやや不安定
- WindowsのDesktopからmntさせる
- git管理

## 環境構築
- curl -s "https://laravel.build/laravel-study?with=mysql,mailpit" | bash
- ./vendor/bin/sail up -d
- Laravel_Sail提供する追加の設定と機能を利用できるスクリプトを実行できる

- ./vendor/bin/sail down

### Windows上でDocker環境にmntして、いつものコマンドにする
- docker compose up -d
- .envファイルやdocker-compose.ymlファイルに定義された環境変数を使用、任意のプロジェクトで使用する


- docker compose down
