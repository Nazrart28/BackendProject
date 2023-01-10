<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class Barangcontroller extends Controller
{
    public function index()
    {
        // $request all berfungsi untuk memasukkan semua request dari nama fiel
        $barang = Barang::all();

        return response()->json(
            $data = [
                'data' => $barang,

            ]
        );
    }

    public function store(Request $request)
    {
        // $request all berfungsi untuk memasukkan semua request dari nama field
        $barangoutput =  Barang::create($request->all());
        //$barang->nama = $request->nama;
        //$barang->jenis = $request->jenis;
        //$barang->harga = $request->harga;
        //$output = $barang->save();
        return response()->json(
            $data = [
                'data' => $request->all(),
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::find($id);
        return response()->json(
            $data = [
                'data' => $barang,
            ]
        );
    }


    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        $barang->nama = $request->nama;
        $barang->jenis = $request->jenis;
        $barang->harga = $request->harga;
        $barang->save();
        return response()->json(
            $data = [
                'data' => $request->all(),
            ]
        );
    }

    public function destroy($id)
    {
         // $request all berfungsi untuk memasukkan semua request dari nama field
         $barang = Barang::find($id);
         $hapus = $barang->delete();
 
         return response()->json(
             $data = [
                 'data' => $hapus,
 
             ]
         );
     }
 

}
