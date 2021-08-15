<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class SiswaController extends Controller
{

    public function index()
    {
        $model = siswa::all();

        return response()->json(
            [
                "success" => true,
                "message" => "Data berhasil diambil",
                "data" => $model,
            ],
            200
        );
    }

    public function detail($id)
    {
        $model = siswa::find($id)->first();

        return response()->json(
            [
                "success" => true,
                "message" => "Data berhasil diambil",
                "data" => $model,
            ],
            200
        );
    }

    public function create(request $request)
    {
        $model = new siswa();
        $model->nama = $request->nama;
        $model->alamat = $request->alamat;
        $model->save();

        // return "Data berhasil disimpan";
        return response()->json(
            [
                "success" => true,
                "message" => "Data berhasil disimpan",
                "data" => $model
            ],
            201
        );
    }

    public function update(request $request, $id)
    {
        $nama = $request->nama;
        $alamat = $request->alamat;

        $model = siswa::find($id);
        $model->nama = $nama;
        $model->alamat = $alamat;
        $model->update();

        return response()->json(
            [
                "success" => true,
                "message" => "Data berhasil diperbarui",
                "data" => $model
            ],
            201
        );
    }

    public function delete($id)
    {
        $model = siswa::find($id);
        $model->delete;

        return "Data berhasil dihapus";
    }
}
