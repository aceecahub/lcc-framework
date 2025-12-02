<?php

namespace App\Http\Controllers;

use App\Models\Pemasok;
use Illuminate\Http\Request;

class PemasokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemasok = Pemasok::all();
        return response()->json([
            'message' => 'Data ditampilkan',
            'data' => $pemasok
        ], 201);
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
        $dataValidate = $request->validate([
            'nama_pemasok' => 'required',
            'alamat' => 'required',
            'noHP' => 'required'
        ]);

        $pemasok = Pemasok::create($dataValidate);

        return response()->json([
            'message' => 'Data Pemsok Terkirim',
            'data' => $pemasok
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pemasok = Pemasok::find($id);
        return response()->json([
            'message' => 'Data Pemasok Berhasil diambil',
            'data' => $pemasok
        ], 201);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pemasok = Pemasok::find($id);
        return response()->json([
            'message' => 'Data Pemasok Berhasil di ubah',
            'data' => $pemasok
        ], 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataValidate = $request->validate([
            'nama_pemasok' => 'required|unique:pemasoks,nama_pemasok',
            'alamat' => 'required',
            'noHP' => 'required'
        ]);

        $pemasok = Pemasok::find($id)->update($dataValidate);

        return response()->json([
            'message' => 'Data berhasil diubah',
            'data' => $pemasok
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pemasok::find($id)->delete();
        return response()->json([
            'message' => "Berhasil dihapus",
            'status' => 200
        ]);
    }
}
