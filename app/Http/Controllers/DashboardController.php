<?php

namespace App\Http\Controllers;

use App\Models\Boking;
use App\Models\Car;
use App\Models\Tipe;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.index');
    }

    public function viewbooking() {
        $param = [
            'listbooking' => Boking::all(),
        ];

        return view('dashboard.booking.viewbooking', $param);
    }

    public function viewcar() {
        $param = [
            'listcar' => Car::all(),
        ];

        return view('dashboard.car.viewcar', $param);
    }

    public function viewtipe() {
        $param = [
            'listtipe' => Tipe::all(),
        ];

        return view('dashboard.tipe.viewtipe', $param);
    }
}
