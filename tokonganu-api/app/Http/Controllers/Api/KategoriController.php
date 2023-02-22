<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Barang;

class KategoriController extends Controller
{
    public function getkategori($id){
        $ktgr= Barang::where('kategori_id', $id)->get();
        return response()->json($ktgr);
    }

}