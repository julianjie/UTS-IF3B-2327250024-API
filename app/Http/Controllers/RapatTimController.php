<?php

namespace App\Http\Controllers;

use App\Models\RapatTim;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RapatTimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rapatTim = RapatTim::all();
        $data['success'] = true;
        $data['message'] ="Data Rapat Tim";
        $data['result'] = $rapatTim;
        return response()->json($data, Response::HTTP_OK);
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
        $validate = $request->validate([
            'tim_1' => 'required',
            'tim_2' => 'required',
        ]);

        $rapatTim = RapatTim::create($validate);
        if($rapatTim){
            $response['success']= true;
            $response['message']= 'Rapat Tim berhasil ditambahkan.';
            $response['result'] = $rapatTim;
            return response()->json($response,Response::HTTP_CREATED);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(RapatTim $rapatTim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RapatTim $rapatTim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RapatTim $rapatTim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RapatTim $rapatTim)
    {
        //
    }
}
