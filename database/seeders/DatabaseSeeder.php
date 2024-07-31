<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Car;
use App\Models\Tipe;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            "name" => "Risky Syahbani",
            "username" => "risky",
            "email" => "risky@gmail.com",
            "password" => bcrypt("admin"),
            "is_admin" => true,
        ]);

        Tipe::factory()->create([
            "nama_tipe" => "Mini Bus"
        ]);
        Tipe::factory()->create([
            "nama_tipe" => "Sedan"
        ]);

        Car::factory()->create([
            "tipe_id" => 1,
            "nama_mobil" => "TOYOTA AVANZA",
            "price" => 400000,
            "pintu" => 4,
            "penumpang" => 8,
            "description" => "Termasuk Mobil + Supir + BBM Durasi 12 jam dalam kota free welcome drink untuk tanpa sopir atau lepas kunci adalah pilihan manual / matic",
            "image" => "toyota_avanza.jpg"
            
        ]);
        Car::factory()->create([
            "tipe_id" => 1,
            "nama_mobil" => "TOYOTA CALYA",
            "price" => 350000,
            "pintu" => 4,
            "penumpang" => 8,
            "description" => "Termasuk Mobil + Supir + BBM Durasi 12 jam dalam kota free welcome drink untuk tanpa sopir atau lepas kunci adalah pilihan manual / matic",
            "image" => "toyota_calya.jpg"
            
        ]);
        Car::factory()->create([
            "tipe_id" => 2,
            "nama_mobil" => "HONDA CIVIC",
            "price" => 1250000,
            "pintu" => 4,
            "penumpang" => 4,
            "description" => "Termasuk Mobil + Supir + BBM Durasi 12 jam dalam kota free welcome drink untuk tanpa sopir atau lepas kunci adalah pilihan manual / matic",
            "image" => "honda_civic.jpg"
        ]);
        Car::factory()->create([
            "tipe_id" => 2,
            "nama_mobil" => "TOYOTA VIOS",
            "price" => 700000,
            "pintu" => 4,
            "penumpang" => 4,
            "description" => "Termasuk Mobil + Supir + BBM Durasi 12 jam dalam kota free welcome drink untuk tanpa sopir atau lepas kunci adalah pilihan manual / matic",
            "image" => "toyota_vios.jpg"
        ]);
    }
}
