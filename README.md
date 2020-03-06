# Belajar Laravel

Versi Laravel: Laravel 6

Demo

![Demo](public/demo.gif)

### Konsep MVC
MVC adalah design patern atau arsitektur pemrograman. MVC singakatan dari Model, View dan Controller

### Cara Kerja MVC di Laravel

![konsep mvc](https://miro.medium.com/max/2348/1*xnuMvzXzmAxYXcRrd1Wj5Q.png)

Misalkan lo mau buat halaman website dengan URL: beritapagi.com/artikel

#### 1. Buat route
Buka file `routes/web.php` dan konfigurasi route nya

#### 2. Buat Controller (C)
File controller terletak di `app/Http/Controllers`, controller lebih berfungsi sebagai "pengontrol" atau logic yang akan di jalanin ketika ada yang memanggil (dari routes)

#### 3. Buat View (V)
File view terletak di `resources/views` berfungsi sebagai tampilan antar muka websitenya, kebanyakan lebih ke syntax HTML. Di View hanya menampilkan data-data yang di kirim dari controller saja, tidak banyak logic

#### 4. Buat Model (M)
File model bawaannya terletak di `app` tetapi agar lebih rapih di buat lagi folder Model yang letaknya jadi `app/Models`. Model bertugas untuk berkomunikasi ke database management system. Di model lebih ke melayani permintaan kebutuhan data yang ada di database. Permintaan ini umumnya dari si Controller.

***

## Kebutuhan
1. Pastikan sudah install composer https://getcomposer.org/
2. Sudah install git (opsional)

## Instalasi

1. Clone or download repository `git clone https://github.com/alfathony/bootcamp-umb-laravel.git`
2. Duplikat file `.env.example` dan ganti nama menjadi `.env`
3. Jalankan `composer install`
4. Jalankan `php artisan key:generate`
5. Pada file `.env` atur konseksi databasenya
6. Jalankan migration `php artissan migrate` maka database akan ke import secara otomatis
7. Jalankan project di browser Anda atau bisa menggunakan `php artisan serve`
