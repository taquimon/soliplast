<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $products = DB::table('producto')->get();
        Log::debug($products);
        return view('pages.inventario', ['products' => $products, 'name' => 'test']);
    }
    public function show() {
        Log::info("Product Controller");
        return view('pages.inventario', ['name' => 'test']);
    }
}