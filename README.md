# Website Pemesanan Rental Mobil

## Screenshots

![preview img](/home.png)
![preview img](/daftarmobil.png)
![preview img](/daftarbooking.png)
![preview img](/dashboard.png)
![preview img](/booking.png)
![preview img](/cars.png)
![preview img](/tipe.png)

## Cara Donwload

Clone Projek

```bash
  git clone https://github.com/RiskiSyahbani/Sewa_Kendaraan.git
```

Masuk ke folder dengan perintah

```bash
  cd Sewa_Kendaraan
```

-   Copy .env.example menjadi .env kemudia edit databasenya

```bash
    composer install
```

```bash
    php artisan key:generate
```

```bash
    php artisan artisan migrate:fresh --seed
```
