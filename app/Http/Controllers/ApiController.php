<?php

namespace App\Http\Controllers;

use App\Models\Aturan;
use App\Models\Diagnosa;
use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getGejala(Request $request)
    {
        $result = new Gejala();
        // if ($request->id) $result = $result->where('id', $request->id);
        // if ($request->id_user) $result = $result->where('id_user', $request->id_user);
        $result = $result->get();

        $isAvalable = count($result) > 0 ? true : false;
        return response()->json([
            "status" => $isAvalable ?? false,
            "code" => $isAvalable ? 200 : 600,
            "message" => $isAvalable ? "Get data success!" : "No Data Found!",
            "total_data" => $isAvalable ? $result->count() : 0,
            "data" => $isAvalable ? $result : []
        ], 201);
    }

    public function resDiagnosa(Request $request)
    {
        $result = new Diagnosa();
        // if ($request->id) $result = $result->where('id', $request->id);
        // if ($request->id_user) $result = $result->where('id_user', $request->id_user);
        $result = $result->get();

        $isAvalable = count($result) > 0 ? true : false;
        return response()->json([
            "status" => $isAvalable ?? false,
            "code" => $isAvalable ? 200 : 600,
            "message" => $isAvalable ? "Get data success!" : "No Data Found!",
            "total_data" => $isAvalable ? $result->count() : 0,
            "data" => $isAvalable ? $result : []
        ], 201);
    }

    public function diagnosa(Request $request)
    {
        $penyakit = Penyakit::all();
        $user_id = $request->user_id;
        $gejala = $request->gejala;
        // dd($request->gejala);
        $aturan = Aturan::all();
        $data = [];
        foreach ($aturan as $key => $atur) {
            foreach ($gejala as $key => $gej) {
                if (str_contains($atur->daftargejala, $gej)) {
                    // dd($atur);
                    array_push($data, [
                        "idpenyakit" => $atur->id_penyakit,
                        "gejala" => $gej
                    ]);
                }
            }
        }
        $hasil = [];
        foreach ($penyakit as $key => $peny) {
            $jum = 0;
            foreach ($data as $key => $dat) {
                if ($peny->id == $dat['idpenyakit']) {
                    $jum += 1;
                }
            }
            array_push($hasil, [
                'idpenyakit' => $peny->id,
                'jum' => $jum
            ]);
        }

        $dataPenyakit = array_reduce($hasil, function ($a, $b) {
            return @$a['jum'] > $b['jum'] ? $a : $b;
        });
        $getpenyakit = Penyakit::where('id', $dataPenyakit['idpenyakit'])->first();

        $store = Diagnosa::create([
            "user_id" => $request->user_id,
            "gejala" => json_encode($request->gejala),
            "hasil" => $dataPenyakit["idpenyakit"],
            "solusi" => $getpenyakit->solusi,
        ]);

        return response()->json([
            "status" => true,
            "code" => 200,
            "message" => "Diagnosa berhasil !",
            "data" => $store
        ], 201);
    }
}