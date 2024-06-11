<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index(){
        $inventario = Inventario::all();
        $i = 0; 
        return view('api.inventario.index', compact('inventario', 'i'));
    }
}