<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ================== Find the top 3 products with the highest total quantity ordered.  ===================

        echo "======================= MYSQL QUERY ============================== <br>";

        $product = "SELECT p.name, COUNT(oi.id) as highest_order FROM products p JOIN order_items oi ON oi.product_id = p.id GROUP BY p.name
                    ORDER BY highest_order DESC LIMIT 3";
        $data1 = DB::select($product);
        foreach ($data1 as $data) {
            echo 'Name: ' . $data->name . '<br>' . 'Password: ' . $data->highest_order . '<hr>';
        }

        echo "======================= EQUOLENT QUERY ============================= <br>";

        echo "========================= QUERY ONE ================================ <br>";

        // $product = Product::with('orderItem')->get()->toArray();
        $product = Product::with('orderItem')->select(['name','orders.product_id','orders.order_id'])->get()->toArray();
        dd($product);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
