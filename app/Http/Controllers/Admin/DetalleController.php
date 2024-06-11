<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetalleController extends Controller
{
    public function index(){
        $detalles = Detalle::all();
        $i = 0; 
        return view('Admin.detalle.index', compact('detalles', 'i'));
    }
}
