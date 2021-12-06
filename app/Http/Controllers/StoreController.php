<?php

namespace App\Http\Controllers;

use App\Models\Resort;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store() {
        $resorts = Resort::all();
        dd($resorts);
        return view("admin.resort.store",compact('resorts'));
    }
}
