# smpn26batanghari

# installasi
1. **Clone Repository**
```bash
git clone https://github.com/fazaDev/smpn26batanghari.git
cd smpn26batanghari
composer install
copy .env.example .env
```

2. **Buka ```.env``` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai**
```
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

3. **Instalasi website**
```bash
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan storage:link
```

4.** Jalankan website**
```bash
php artisan serve
