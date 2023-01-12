<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Car;
use Illuminate\Http\Response;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Car::paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *

     */
    public function store(CarRequest $request )
    {
        return Car::create($request->validate());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     */
    public function update(CarRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
