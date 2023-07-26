# Laravel ロールと権限のテストプロジェクト

これは、AdminLTE と Spatie/Laravel-Permission パッケージを使用して、ロールと権限をテストするためにセットアップされた Laravel プロジェクトです。

## 前提条件

プロジェクトをクローンして実行する前に、以下があなたのマシンにインストールされていることを確認してください：

- PHP（バージョン 8.1 以上）
- Composer
- Node.js（npm を含む）
- MySQL または他のサポートされているデータベース
- Git

## スタートガイド

以下の手順に従って、プロジェクトをローカルにクローンしてセットアップしてください：

1. リポジトリをクローンする：

```bash
git clone https://github.com/looreypun/laravel-role-permission.git
cd laravel-role-permission
```

2. 依存関係をインストールする：

```bash
composer install
npm install && npm run build
```

3. Adminlteのテンプレートをインストールする：

```bash
php artisan adminlte:install --force
```

4. `.env` ファイルを作成する：

```bash
cp .env.example .env
```

5. アプリケーションキーを生成する：

```bash
php artisan key:generate
```

6. データベースのマイグレーションを実行し、データベースをシードする：

```bash
php artisan migrate --seed
```

このコマンドは必要なテーブルを作成し、データベースにデフォルトのロールと権限をシードします。

7. アプリケーションを起動する：

```bash
php artisan serve
```

これで、アプリケーションが `http://localhost:8000` で稼働しているはずです。

## ロールと権限のテスト

- AdminLTE テンプレートがプロジェクトに統合されており、Spatie/Laravel-Permission パッケージがロールと権限の管理を設定しています。
- アプリケーションにアクセスするには、Web ブラウザで `http://localhost:8000` に移動します。
- デフォルトの管理者の資格情報を使用してログインします：
  ## Email:
  #### 管理者：sherpa.developer@itsherpa.com
  #### ユーザー：user.developer@itsherpa.com
  #### アルバイト：partimer.developer@itsherpa.com
  ## パスワード
  #### itsherpa
- ログイン後、ロールと権限のテストを行うため、ロールと権限の管理セクションに移動できます。

## カスタマイズ

特定のニーズに合わせてプロジェクトを自由に変更してください。必要に応じてさらにロールや権限を追加したり、異なるデザインテンプレートを実装したりできます。

## 重要な注意事項

- このプロジェクトはテストと教育目的のためのものであり、追加のセキュリティと微調整なしに本番利用には適していない場合があります。

## ライセンス

[MIT ライセンス](LICENSE)

---

テストを楽しんでください！問題が発生した場合や質問がある場合は、お気軽に問題を開いたり、お問い合わせください。