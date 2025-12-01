
# Dokumentasi project
# Kristo Samosir | KreasiAi

Project ini adalah aplikasi Laravel yang menyediakan fitur:

-   Authentication (Login & Register)
-   CRUD Artikel
-   Upload gambar ke folder public
-   Menampilkan artikel dengan slug

User Untuk Login

Nama: Tes User

Email: test@gmail.com

Password: user123456

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

- Jalankan server mysql

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

# Halaman Login
Halaman login adalah halaman pertama pada project ini. Pada halaman ini, user dapat login menggunakan email dan password untuk mengakses fitur CRUD
Jika user belum mempunyai username dan password, user dapat melakukan register terlebih dahulu.
<img width="2048" height="1622" alt="127 0 0 1_8000_ (1)" src="https://github.com/user-attachments/assets/62fde7a3-f31e-43bf-a8c9-5ee14a242340" />

# Halaman Register
Pada halaman register, user dapat melakukan pendaftaran akun dengan mengisi field nama, email dan password. Setelah melakukan registrasi, user dapat login menggunakan email dan password pada halaman login.
<img width="2048" height="1622" alt="127 0 0 1_8000_register" src="https://github.com/user-attachments/assets/389b3fcd-e793-41cd-b917-26b24bf029b4" />


# Halaman Home
Pada halaman ini terdapat navbar, main content dan footer. Main Content berisi card yang berisi data-data yang diambil dari database. Pada halaman ini juga kita dapat melakukan operasi CRUD yang merupakan fitur utama pada project ini.

Data tersebut dapat dibuat pada halaman create data. Untuk masuk ke halaman itu, kita dapat menekan tombol create data yang berada di navbar.
<img width="2048" height="1622" alt="127 0 0 1_8000_article" src="https://github.com/user-attachments/assets/e8e56fc5-bebb-4de2-aac8-051f95364049" />

# Halaman Create Data

<img width="2048" height="1622" alt="127 0 0 1_8000_article_create" src="https://github.com/user-attachments/assets/138cb80d-a834-45ef-a6ba-7eda56b12ff9" />


# Halaman Update Data

<img width="2048" height="1622" alt="127 0 0 1_8000_article_bahaya-konsumsi-antibiotik-tanpa-resep-dokter_edit" src="https://github.com/user-attachments/assets/dec0e878-6a79-45ea-8f7f-cb10c30bcf39" />


