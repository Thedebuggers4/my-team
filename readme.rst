###################
Sistem Ujian Online
###################

Sistem Ujian Online adalah aplikasi berbasis web yang dikembangkan menggunakan framework CodeIgniter 3 untuk memudahkan pelaksanaan ujian secara digital. Aplikasi ini menyediakan antarmuka yang intuitif dan komprehensif untuk manajemen ujian, mulai dari pembuatan soal, penjadwalan ujian, pelaksanaan ujian, hingga pelaporan hasil ujian.

*******************
Fitur Utama
*******************

- Multi-level pengguna (Admin, Guru, dan Siswa)
- Manajemen mata pelajaran
- Manajemen kelas
- Manajemen jenis ujian
- Pembuatan dan pengelolaan bank soal
- Penjadwalan ujian
- Pengacakan soal ujian
- Pelaksanaan ujian dengan batas waktu
- Penilaian otomatis
- Laporan hasil ujian
- Ekspor hasil ujian ke PDF

*******************
Persyaratan Sistem
*******************

- PHP versi 8.0 atau lebih baru
- MySQL 5.7 atau lebih baru
- Web server (Apache/Nginx)
- Browser modern (Chrome, Firefox, Edge)

************
Instalasi
************

1. Clone atau unduh repositori ini
2. Letakkan di direktori web server Anda
3. Buat database MySQL baru
4. Import file `ujianonline.sql` ke database baru tersebut
5. Konfigurasi koneksi database di `application/config/database.php`
6. Akses aplikasi melalui browser

***********
Penggunaan
***********

Untuk menggunakan aplikasi ini, gunakan akun berikut:

**Admin:**
- Username: admin
- Password: admin123

**Guru:**
- Username: ahmad.fauzi (dan username guru lainnya)
- Password: guru1234

**Siswa:**
- Gunakan NIS siswa sebagai username
- Password diatur oleh admin

*******
Struktur Aplikasi
*******

Aplikasi ini mengikuti struktur standar CodeIgniter 3 dengan beberapa penyesuaian:

- `application/controllers/` - Controller untuk semua fitur
- `application/models/` - Model untuk akses dan manipulasi data
- `application/views/` - Tampilan untuk semua modul
- `assets/` - File CSS, JS, gambar, dan lainnya
- `dompdf/` - Library untuk ekspor ke PDF

*******
Pengembangan
*******

Aplikasi ini dikembangkan sebagai proyek Tugas Akhir untuk memenuhi persyaratan akademik.

Kontributor:
- [Adi Satria Sejati](https://github.com/AdiSatriaSejati)
- [Arya Dillah](https://github.com/Aryaa0112-A)
- [Febrian Sitorus](https://github.com/Febrianpane)

*******
Lisensi
*******

Aplikasi ini dikembangkan untuk tujuan pendidikan.
