<?php

namespace App\Http\Controllers\Guest;

use App\Models\Train;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrainController extends Controller
{
    public function index() {
        $trains = Train::all();

        return view('welcome', compact('trains'));
    }
}
