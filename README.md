# ディレクトリ構造
```
├── Laravel
│   └── portfolios ※Laravelアプリの設置場所
├── docker
│   ├── app ※WEBアプリ用
│   │   ├── 000-default.conf
│   │   ├── Dockerfile
│   │   └── php.ini
│   ├── db ※DB用
│   │   ├── data
│   │   └── my.cnf
│   └── phpmyadmin ※phpmyadmin
│       └── sessions
├── README.md
└── docker-compose.yml
```

## dockerの起動

- イメージの作成
```
docker-compose build
```

- コンテナの作成
```
docker-compose up -d
```

コンテナの内容は、``docker-compose.yml``に記載。

- appコンテナの中に入る
```
docker-compose exec app bash
```

## Laravelの環境構築

- envファイルの作成
``.env.example``をコピーして、``.env``を作成。

**DBの内容を下記に変更**
```
DB_CONNECTION=mysql
DB_HOST=portfolios_db
DB_PORT=3306
DB_DATABASE=portfolios
DB_USERNAME=user
DB_PASSWORD=password
```

**マイグレーションの実行**

- コンテナに入る
```
docker-compose exec app bash
```

- Laravelプロジェクトに移動
```
cd portfolios/
```
- マイグレーションの実行
```
php artisan migrate
```