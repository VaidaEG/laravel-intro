<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GardenController extends Controller
{
    public function index($number, $id) // <--- gates metodas
    {
        $id = 5 * $id;
        return view('website.gates', ['first' => $number, 'id' => $id]);
    }
}
