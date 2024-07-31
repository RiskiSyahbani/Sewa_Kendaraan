<?php

namespace App\Http\Controllers;

use App\Models\Boking;
use Illuminate\Http\Request;
use App\Models\Car;

class DaftarMobilController extends Controller
{
    public function index () {
        $param = [
            "title" => "Daftar Mobil",
            "active" => "daftar_mobil",
            "listmobil" => Car::all(),
        ];
        
        return view('daftarmobil', $param);
    }

    public function booking($id) 
    {
        $data = Car::find($id);

        $param =  [
            "title" => "Booking Mobil",
            "active" => "booking_mobil",
            "datamobil" => $data
        ];

        return view('booking', $param);
    }

    public function tambahbooking (Request $request) {
        // dd($request);
        $request->validate([
            "nama_lengkap" => "required",
            "alamat_lengkap" => "required",
            "nomor_wa" => "required|numeric",
        ]);

        $data = [
            "car_id" => $request->input("car_id"),
            "nama_lengkap" => $request->input("nama_lengkap"),
            "alamat_lengkap" => $request->input("alamat_lengkap"),
            "nomor_wa" => $request->input("nomor_wa"),

        ];

        Boking::create($data);
        return redirect(url("daftarmobil"))->with('success', 'Berhasil Booking');
    }
}
