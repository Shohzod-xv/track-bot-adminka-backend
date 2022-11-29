<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**  Driver all id desc*/
        $drivers = Driver::orderBy('id', 'desc')->get();
        return response()->json($drivers);

//        $drivers = Driver::all()->orderBy('id', 'desc')->get();
//        return response()->json($drivers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function store(StoreCategoryRequest $request)
    {
        // create api
        $driver = Driver::create($request->validated());
        return response()->json($driver);
    }

    public function show($id)
    {
        return response()->json(Driver::find($id));
    }

    public function update(UpdateCategoryRequest $request, Driver $driver)
    {
        $driver->update($request->validated());
        return response()->json($driver);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
