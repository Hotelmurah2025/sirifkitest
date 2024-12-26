# CRUD Produk dengan CodeIgniter 3

Aplikasi CRUD sederhana untuk manajemen produk menggunakan CodeIgniter 3.

## Persyaratan Sistem

- PHP >= 5.6
- MySQL >= 5.6
- Web Server (Apache/Nginx)
- mod_rewrite diaktifkan (untuk Apache)

## Cara Instalasi

1. Clone repository ini ke direktori web server Anda:
   ```bash
   git clone https://github.com/Hotelmurah2025/sirifkitest.git
   ```

2. Buat database baru dengan nama 'sirifkitest':
   ```sql
   CREATE DATABASE sirifkitest;
   ```

3. Import struktur tabel dari file SQL:
   ```bash
   mysql -u root -p sirifkitest < application/sql/products.sql
   ```

4. Konfigurasi database:
   - Buka file `application/config/database.php`
   - Sesuaikan pengaturan database:
     ```php
     'username' => 'root',     // Sesuaikan dengan username MySQL Anda
     'password' => '',         // Sesuaikan dengan password MySQL Anda
     'database' => 'sirifkitest',
     ```

5. Konfigurasi base URL:
   - Buka file `application/config/config.php`
   - Sesuaikan base URL dengan URL aplikasi Anda:
     ```php
     $config['base_url'] = 'http://localhost/sirifkitest';
     ```

## Cara Menjalankan Aplikasi

1. Pastikan web server (Apache/Nginx) dan MySQL sudah berjalan
2. Buka browser dan akses URL aplikasi:
   ```
   http://localhost/sirifkitest
   ```
3. Untuk mengakses halaman produk, gunakan URL:
   ```
   http://localhost/sirifkitest/index.php/products
   ```

## Fitur

- Menampilkan daftar produk
- Menambah produk baru
- Mengedit produk yang ada
- Menghapus produk

## Struktur Database

Tabel: products
- id (int, auto increment)
- name (varchar)
- price (decimal)
- description (text)

## Troubleshooting

1. Jika muncul error "Database connection failed":
   - Pastikan MySQL server sudah berjalan
   - Periksa kembali konfigurasi database
   - Pastikan database 'sirifkitest' sudah dibuat

2. Jika muncul "404 Page Not Found":
   - Pastikan mod_rewrite sudah diaktifkan (Apache)
   - Periksa konfigurasi base_url di config.php
   - Pastikan .htaccess sudah ada di root folder

3. Jika form tidak berfungsi:
   - Pastikan session sudah dikonfigurasi dengan benar
   - Periksa permission folder application/cache dan application/logs
