<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\GuruModel;

use Auth;

class GuruController extends Controller
{
    public function index()
    {
        Auth::user()->name;
        $data = GuruModel::all();
        return response()->json($data);
    }
    public function show($id)
    {
        Auth::user()->name;
        $data = GuruModel::where('id', $id)->get();
        return response()->json($data);
    }
    public function create(Request $request)

    {
        Auth::user()->name;
        GuruModel::create($request->all());
        return response()->json(
            ['message' => 'Data berhasil di simpan'],
            200
        );
    }
    public function update(Request $request, $id)

    {
        Auth::user()->name;
        $data = GuruModel::where('id', $id)->first();
        $data->update($request->all());
        return response()->json(
            ['message' => 'Data berhasil diubah'],
            200
        );
    }
    public function delete($id)

    {
        Auth::user()->name;
        $data = GuruModel::where('id', $id)->first();
        $data->delete();
        return response()->json(
            ['message' => 'Data berhasil di hapus'],
            200
        );
    }
}
