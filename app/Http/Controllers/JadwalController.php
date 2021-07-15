<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\JadwalModel;

use Auth;

class JadwalController extends Controller
{
    public function index()
    {
        Auth::user()->name;
        $data = JadwalModel::with('guru', 'matpel', 'ruang')->get();
        return response()->json($data);
    }
    public function show($data)
    {
        Auth::user()->name;
        $data = JadwalModel::with('guru', 'matpel', 'ruang')->where('id', $data)->first();
        return response()->json($data);
    }
    public function create(Request $request)

    {
        Auth::user()->name;
        JadwalModel::create($request->all());
        return response()->json(
            ['message' => 'Data berhasil di simpan'],
            200
        );
    }
    public function update(Request $request, $id)

    {
        Auth::user()->name;
        $data = JadwalModel::where('id', $id)->first();
        $data->update($request->all());
        return response()->json(
            ['message' => 'Data berhasil diubah'],
            200
        );
    }
    public function delete($id)

    {
        Auth::user()->name;
        $data = JadwalModel::where('id', $id)->first();
        $data->delete();
        return response()->json(
            ['message' => 'Data berhasil di hapus'],
            200
        );
    }
}
