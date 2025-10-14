<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ======================= SELECT QUERY =============================
        $mySqlQuery = "SELECT u.name,COUNT(o.id) as total_order FROM users u  JOIN orders o ON u.id = o.user_id  WHERE o.status = 'completed'
                GROUP BY u.id,u.name HAVING total_order >= 9";
        // ======================= EQUOLENT QUERY =============================
        $equolentQuery1 = User::with('order as o')->select('name',DB::raw('COUNT(orders.id) as total_order'))->
        groupBy('users.id','users.name')->having('total_order','>=',7)->get();
        dd($equolentQuery1);
        // ======================= RESULT QUERY =============================
        $data = DB::select($mySqlQuery);
        foreach ($data as $result) {
            echo "Name : $result->name <br>";
            echo "Total Order : $result->total_order";
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
