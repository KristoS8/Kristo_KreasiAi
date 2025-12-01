
# Dokumentasi project
# Kristo Samosir | KreasiAi

Project ini adalah aplikasi Laravel yang menyediakan fitur:

-   Authentication (Login & Register)
-   CRUD Artikel
-   Upload gambar ke folder public
-   Menampilkan artikel dengan slug


![Logo](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg)


## 🧰 Software yang Dibutuhkan

Pastikan semua software berikut telah diinstall:

PHP 8.1+
(disarankan install XAMPP agar PHP + MySQL + Apache langsung terinstall)

Composer
https://getcomposer.org/

Node.js (untuk Vite)
https://nodejs.org/

Git
https://git-scm.com/

Clone project

```bash
  git clone https://github.com/KristoS8/Kristo_KreasiAi.git
```

Masuk ke direktori project

```bash
  cd Kristo_KreasiAi
```

Install dependencies

```bash
  npm install
```

```bash
  composer install
```

### ⚙️ .env Setup

Jika file .env belum tersedia:

```bash
copy .env.example .env

```

### 🗄 Setup Database

Buka phpMyAdmin atau MySQL Workbench

Buat database baru:

```
nama_database
```

edit file .env dan sesuaikan

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kristo_kreasiai
DB_USERNAME=root
DB_PASSWORD=
```

## 🧱 Migrasi Database

Migrasi Database

```bash
  php artisan migrate
```

Jalankan server

```bash
  php artisan serve
```
## Tech Stack

**Client:** HTML, CSS, Bootstrap

**Server:** Laravel 12, MySql

