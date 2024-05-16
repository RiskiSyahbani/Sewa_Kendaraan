# Website Pemesanan Rental Mobil

## Screenshots

![preview img](/home.png)
![preview img](/daftarmobil.png)
![preview img](/daftarbooking.png)

## Cara Donwload

Clone Projek

```bash
  git clone https://github.com/mrafing/tugas_risky.git rental_mobil
```

Masuk ke folder dengan perintah

```bash
  cd rental_mobil
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
