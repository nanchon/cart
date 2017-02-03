# Laravel sample
- 認証

# 環境
- laravel/framework (5.3.29)
- PHP (7.0.14)
- Mysql (5.7.17)

# セットアップ
- cp -p .env.example
- php artisan key:generate
- ./dev_init.sh　※初回はcreate databaseしないとコケるかも！
- php artisan serve
