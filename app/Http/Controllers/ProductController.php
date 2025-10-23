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

        $product = "SELECT p.name, sum(o.quantity) as total_quantity FROM products p JOIN
                    order_items oi ON oi.product_id = p.id JOIN orders o ON o.id = oi.order_id
                    GROUP BY p.id,p.name ORDER BY total_quantity DESC LIMIT 3";

        $data1 = DB::select($product);
        foreach ($data1 as $data) {
            echo 'Product Name: ' . $data->name . '<br>' . 'Total Orders: ' . $data->total_quantity . '<hr>';
        }

        echo "======================= EQUOLENT QUERY ============================= <br>";

        echo "========================= QUERY ONE ================================ <br>";

        $equolentQuery1 = Product::join('order_items as oi','oi.product_id','=','products.id')->
                        join('orders as o','o.id','=','oi.order_id')->
                        select('name',DB::raw("SUM(o.quantity) as total_quantity"))->
                        groupBy(['products.id','products.name'])-> orderByDesc('total_quantity')->
                        limit(3)->get();

        foreach ($equolentQuery1 as $data) {
            echo 'Product Name: ' . $data->name . '<br>' . 'Total Orders: ' . $data->total_quantity . '<hr>';
        }

        echo "========================= QUERY TWO ================================ <br>";

        $equolentQuery2 = Product::with(['order_items','order'])->
                        select('products.name',DB::raw("SUM(o.quantity) as total_quantity"))->
                        groupBy(['products.id','products.name'])-> orderByDesc('total_quantity')->
                        limit(3)->get();

        foreach ($equolentQuery2 as $data) {
            echo 'Product Name: ' . $data->name . '<br>' . 'Total Orders: ' . $data->total_quantity . '<hr>';
        }


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
