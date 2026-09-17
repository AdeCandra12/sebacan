# 📱 Sebacan — Gadget & Device Rental / Booking Platform

[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com/)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com/)

**Sebacan** adalah aplikasi web berbasis Laravel yang dirancang untuk mempermudah proses peminjaman / sewa (booking) perangkat dan gadget secara online. Platform ini menyediakan katalog produk terstruktur berdasarkan kategori dan brand, alur checkout yang terintegrasi, hingga pelacakan riwayat transaksi.

---

## 🚀 Fitur Utama

- **Katalog Gadget & Brand:** Eksplorasi gadget berdasarkan brand dan spesifikasi.
- **Sistem Booking & Sewa:** Alur pemesanan gadget dengan kalkulasi durasi dan biaya sewa.
- **Halaman Detail Interaktif:** Informasi spesifikasi perangkat, ketersediaan unit, dan ketentuan sewa.
- **Checkout & Riwayat Transaksi:** Ringkasan pesanan, konfirmasi pemesanan, dan pelacakan status transaksi (*Success Booking & Transaction Details*).
- **Responsive UI:** Tampilan antarmuka bersih dan adaptif untuk perangkat mobile maupun desktop.

---

## 🛠️ Tech Stack

- **Framework:** Laravel 11 / PHP 8.2+
- **Database:** MySQL
- **Templating Engine:** Blade Components
- **Frontend / Styling:** Tailwind CSS / CSS Framework
- **Tools Lokal:** Laragon / Composer / Git

---

## 📂 Struktur Modul Tampilan (Views)

```text
resources/views/front/
├── layouts/
│   └── app.blade.php           # Template layout utama
├── index.blade.php             # Beranda & showcase perangkat
├── gadgets.blade.php           # Katalog daftar gadget
├── brands.blade.php            # Daftar brand perangkat
├── details.blade.php           # Detail spesifikasi & informasi produk
├── booking.blade.php           # Formulir booking sewa
├── checkout.blade.php          # Halaman rincian tagihan checkout
├── success_booking.blade.php   # Konfirmasi pemesanan berhasil
├── transactions.blade.php      # Daftar riwayat transaksi
└── transaction_details.blade.php # Detail status invoice / pesanan

💻 Panduan Instalasi Lokal
Ikuti langkah-langkah berikut untuk menjalankan proyek ini di komputer lokal:

1. Clone Repositori
Bash
git clone [https://github.com/AdeCandra12/sebacan.git](https://github.com/AdeCandra12/sebacan.git)
cd sebacan

2. Pasang Dependensi
Bash
composer install
npm install && npm run build
3. Konfigurasi Environment
Salin file template environment dan buat APP_KEY baru:

Bash
cp .env.example .env
php artisan key:generate
Sesuaikan koneksi database pada file .env:

Cuplikan kode
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sebacan
DB_USERNAME=root
DB_PASSWORD=
4. Migrasi Database & Storage
Buat database baru bernama sebacan di phpMyAdmin / MySQL, lalu jalankan migrasi:

Bash
php artisan migrate --seed
php artisan storage:link
5. Jalankan Server
Bash
php artisan serve
Buka browser dan akses aplikasi melalui http://127.0.0.1:8000.

👤 Author
Ade Candra - GitHub Profile