<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\RuangModel;

use Auth;

class RuangController extends Controller
{
    public function index()
    {
        Auth::user()->name;
        $data = RuangModel::all();
        return response()->json($data);
    }
    public function create(Request $request)

    {
        Auth::user()->name;
        RuangModel::create($request->all());
        return response()->json(
            ['message' => 'Data berhasil di simpan'],
            200
        );
    }
    public function update(Request $request, $id)

    {
        Auth::user()->name;
        $data = RuangModel::where('id', $id)->first();
        $data->update($request->all());
        return response()->json(
            ['message' => 'Data berhasil diubah'],
            200
        );
    }
    public function delete($id)

    {
        Auth::user()->name;
        $data = RuangModel::where('id', $id)->first();
        $data->delete();
        return response()->json(
            ['message' => 'Data berhasil di hapus'],
            200
        );
    }
}
