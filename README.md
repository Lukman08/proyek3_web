<p align="center"><a href="https://polindra.ac.id/" target="_blank"><img src="https://rekreartive.com/wp-content/uploads/2018/11/Logo-Polindra-Politeknik-Negeri-Indramayu-Original.png.webp" width="200" alt="Logo Polindra"></a></p>

## Profil Mitra

<p align="center"><a href="https://www.instagram.com/klinikgigi_talkdent/?hl=id" target="_blank"><img src="https://drive.google.com/uc?export=view&id=1qwmDtIktL3tNpvosu5piCPUjYX9JvnA9" width="100" alt="Logo Mitra"></a></p>

Talkdent Dental Clinic Klinik terbaik, terbesar, terbaru, di kota Jatibarang Indramayu. Terdiri dari dokter gigi dan dokter gigi spesialis berpengalaman, trampil dan profesional. Layanan perawatan gigi, estetika gigi.

## Team

Team proyek 3 berasal dari kelompok 5 kelas D4RPL3 tahun 2023. yang beranggotakan:

- **[Lukman Hakim](https://www.instagram.com/lukmanhkmz_/)**
- **[Sri Wahyuni](https://www.instagram.com/_ayuwyuni/)**
- **[Dea Faradisa](https://www.instagram.com/deafaradisa/)**
- **[Siti Putri Rohayati](https://www.instagram.com/spptrii/)**

## Installation

Laravel 8.x menggunakan PHP versi 8.0. Jadi kalau belum update dulu. Lalu pastikan sudah menginstal composer.

1. Clone repository taroh ditempat yang di inginkan, bisa di download .zip atau dengan perintah git clone seperti ini


```
git clone https://github.com/Lukman08/proyek3_web.git
```

2. Masuk ke folder projek yang sudah di clone, klik kanan git bash here


lalu instal composer

```
composer install
```

3. kemudian ketik perintah 

```
code .
```
untuk membuka projek di vs code


Copy `.env.example` kemudian rename menjadi `.env`. Edit pengaturan database di file `.env`, juga masukkan perintah ini untuk mengisi `APP_KEY`

```
php artisan key:generate
```

4. Migrasi tabelnya ke database dengan perintah

```
php artisan migrate --seed
```

Lalu masukkan perintah berikut untuk insert beberapa data ke database

```
php artisan db:seed
```

5. Siap dijalankan...
```
php artisan serve
```

## Contributing

1. Jika sudah di clone, pull dulu repository ini dengan perintah berikut, supaya dapat editan terbaru

```
git init
```

```
git remote add origin https://github.com/Lukman08/proyek3_web.git
```

```
git pull https://github.com/Lukman08/proyek3_web.git
```

2. Edit projek sesuai keinginan
3. Kalau sudah diedit, push kembali seperti perintah berikut

```
git add .
```

```
git commit -m "pesan perubahan"
```

```
git push origin master
```


## Kelompok 5 - D4RPL3 - 2023