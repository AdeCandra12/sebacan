# **📱 Sebacan — Gadget & Device Rental / Booking Platform**

**Sebacan** adalah platform web penyewaan (*rental*) dan pemesanan (*booking*) gadget berbasis framework Laravel. Aplikasi ini menyediakan pengalaman eksplorasi katalog perangkat berdasarkan merek, sistem alur pemesanan terstruktur, kalkulasi sewa, hingga ringkasan dan pelacakan transaksi pesanan.

## **🚀 Fitur Utama**

* **Katalog Brand & Gadget:** Telusuri berbagai jenis perangkat elektronik yang dikelompokkan berdasarkan merek dan kategori.  
* **Detail Spesifikasi Unit:** Halaman komprehensif yang memuat spesifikasi perangkat, status ketersediaan, serta ketentuan sewa.  
* **Alur Pemesanan & Sewa Terintegrasi:** Form reservasi unit dengan kalkulasi durasi serta biaya sewa transparan.  
* **Rincian Checkout & Konfirmasi:** Ringkasan tagihan sewa dan halaman verifikasi pemesanan (*Booking Success*).  
* **Riwayat & Detail Transaksi:** Pantau daftar invoice dan status pemesanan perangkat yang sedang aktif maupun selesai.  
* **Desain Responsif:** Tampilan modern dan ramah pengguna di perangkat mobile maupun desktop.

## **🛠️ Tech Stack**

* **Backend:** Laravel 11 (PHP 8.2+)  
* **Database:** MySQL  
* **Templating Engine:** Blade Components  
* **Frontend / Styling:** Tailwind CSS  
* **Dependency Management:** Composer & NPM  
* **Local Server:** Laragon / PHP Built-in Server

## **📂 Struktur Modul Tampilan (Views)**

resources/views/front/  
├── layouts/  
│   └── app.blade.php              \# Kerangka layout utama  
├── index.blade.php                \# Landing page & showcase gadget unggulan  
├── gadgets.blade.php              \# Daftar katalog seluruh gadget  
├── brands.blade.php               \# Halaman kurasi berdasarkan merek  
├── details.blade.php              \# Informasi lengkap & spesifikasi gadget  
├── booking.blade.php              \# Formulir registrasi sewa  
├── checkout.blade.php             \# Review pesanan & rincian pembayaran  
├── success\_booking.blade.php      \# Notifikasi pemesanan berhasil  
├── transactions.blade.php         \# Daftar riwayat transaksi pengguna  
└── transaction\_details.blade.php  \# Detail rincian transaksi / invoice

## **💻 Panduan Instalasi Lokal**

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di komputer lokal:

### **1\. Kloning Repositori**

git clone https://github.com/AdeCandra12/sebacan.git  
cd sebacan

### **2\. Pasang Dependensi**

composer install  
npm install && npm run build

### **3\. Konfigurasi File Environment**

Salin file template .env.example dan buat kunci aplikasi baru:

cp .env.example .env  
php artisan key:generate

Buka file .env dan sesuaikan koneksi database lokal:

DB\_CONNECTION=mysql  
DB\_HOST=127.0.0.1  
DB\_PORT=3306  
DB\_DATABASE=sebacan  
DB\_USERNAME=root  
DB\_PASSWORD=

### **4\. Migrasi Database & Symlink Storage**

Buat database bernama sebacan di phpMyAdmin / MySQL, lalu jalankan perintah:

php artisan migrate \--seed  
php artisan storage:link

### **5\. Jalankan Server Pengembangan**

php artisan serve

Buka browser Anda dan akses aplikasi di [http://127.0.0.1:8000](http://127.0.0.1:8000).

## **👤 Penulis**

* **Ade Candra** — [GitHub Profil](https://github.com/AdeCandra12)