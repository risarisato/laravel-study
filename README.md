### 21. Sessionの使い方：複数ページでデータをまたぐデータ管理
#### アクセスしたブラブザごとのデータをサーバに保存する仕組み
#### フラッシュと組み合わせて使用する=更新ボタンでの2重送信防止できる

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

## レイアウトの考え方
- layoutディレクトを作成して
- @yieldは親レイアウトテンプレート内でそのセクションを表示するための場所を指定
- @extends親ビューレイアウトを指定し、子ビューがその親レイアウトを継承する
- @sectionは子ビューでセクションを定義し

![image](https://github.com/risarisato/laravel-study/assets/88628553/54856696-9554-4577-92b1-1b8a4f04b536)


## コントローラーの処理
- web.phpにコントローラーの処理やviewも記述できる
- 処理はコントローラーに記述して、表示はviewに、ルーティングはweb.phpが「MVC」モデルの考え方
- web.phpにパスを長く書くのが面倒なのでuseインポート
![image](https://github.com/risarisato/laravel-study/assets/88628553/5a874040-859b-4c4b-a371-68aac0374023)





### Windows上でDocker環境にmntして、いつものコマンドにする
- ./vendor/bin/sail up -d はマウントしてないと出来ない模様
- docker compose up -d
- .envファイルやdocker-compose.ymlファイルに定義された環境変数を使用、任意のプロジェクトで使用する
- docker compose down
