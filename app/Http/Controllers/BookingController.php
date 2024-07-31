<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boking;
use Illuminate\Support\Facades\Redis;

class BookingController extends Controller
{
    public function index () {
        $param = [
            "title" => "Daftar Booking",
            "active" => "daftar_booking",
            "listbooking" => Boking::all(),
        ];

        return view('daftarbooking', $param);
    }

    public function edit($id) {
        $data = Boking::find($id);

        $param =  [
            "title" => "Edit Booking",
            "active" => "edit_booking",
            "databooking" => $data
        ];

        return view('editbooking', $param);
    }

    public function saveedit (Request $request) {
        // dd($request);
        $request->validate(
            [
                "nama_lengkap" => "required",
                "alamat_lengkap" => "required",
                "nomor_wa" => "required|numeric"
            ],
        );

        $data = [
            "nama_lengkap" => $request->input("nama_lengkap"),
            "alamat_lengkap" => $request->input("alamat_lengkap"),
            "nomor_wa" => $request->input("nomor_wa"),
        ];

        Boking::where('id', $request->id)->update($data);
        return redirect(url("daftarbooking"))->with("success", 'Data Berhasil Di Edit');
    }

    public function delete(Request $request) {
        Boking::destroy($request->id);
        return redirect(url('daftarbooking'))->with('success', 'Data Berhasil Di Hapus');
    }
}
