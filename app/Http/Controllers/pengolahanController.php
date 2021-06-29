<?php

namespace App\Http\Controllers;

use App\Models\Baku;
use App\Models\Vendor;
use Illuminate\Http\Request;

class pengolahanController extends Controller
{
    //
    public function index()
    {
        return Baku::all();
    }

    public function create(Request $request)
    {
        $Baku = new Baku;
        $Baku->id_vendor = $request->id_vendor;
        $Baku->jenis_bahan_baku = $request->jenis_bahan_baku;
        $Baku->nama_bahan_baku = $request->nama_bahan_baku;
        $Baku->harga_bahan_baku = $request->harga_bahan_baku;
        $Baku->jumlah_bahan_baku = $request->jumlah_bahan_baku;
        $Baku->save();
        return "Pengolahan Bahan Baku berhasil dibuat";
    }

    public function update(Request $request, $id)
    {
        $id_vendor = $request->id_vendor;
        $jenis_bahan_baku = $request->jenis_bahan_baku;
        $nama_bahan_baku = $request->nama_bahan_baku;
        $harga_bahan_baku = $request->harga_bahan_baku;
        $jumlah_bahan_baku = $request->jumlah_bahan_baku;

        $baku = Baku::find($id);

        $baku->id_vendor = $id_vendor;
        $baku->jenis_bahan_baku = $jenis_bahan_baku;
        $baku->nama_bahan_baku = $nama_bahan_baku;
        $baku->harga_bahan_baku = $harga_bahan_baku;
        $baku->jumlah_bahan_baku = $jumlah_bahan_baku;
        $baku->save();

        return "Pengolahan Bahan Baku berhasil di update!";
    }

    public function delete($id)
    {
        $Baku = Baku::find($id);
        $Baku->delete();

        return "Pengolahan Bahan Baku berhasil dihapus!";
    }

    public function indexView()
    {
        $data = Baku::all();
        return view('pengolahan baku.pengolahan', compact('data'));
    }

    public function createView()
    {

        $vendor = Vendor::all();
        return view('pengolahan baku.create', compact('vendor'));
    }

    public function createData(Request $request)
    {
        $Baku = new Baku;
        $Baku->id_vendor = $request->id_vendor;
        $Baku->jenis_bahan_baku = $request->jenis_bahan_baku;
        $Baku->nama_bahan_baku = $request->nama_bahan_baku;
        $Baku->harga_bahan_baku = $request->harga_bahan_baku;
        $Baku->jumlah_bahan_baku = $request->jumlah_bahan_baku;
        $Baku->save();

        return Redirect(route('pengolahan'));
    }

    public function updateView($id)
    {
        $data = Baku::find($id);
        $vendor = Vendor::all();
        return view("pengolahan baku.update", compact('data','vendor'));
    }

    public function updateData(Request $request, $id)
    {
        $Baku = Baku::find($id);
        $Baku->id_vendor = $request->id_vendor;
        $Baku->jenis_bahan_baku = $request->jenis_bahan_baku;
        $Baku->nama_bahan_baku = $request->nama_bahan_baku;
        $Baku->harga_bahan_baku = $request->harga_bahan_baku;
        $Baku->jumlah_bahan_baku = $request->jumlah_bahan_baku;
        $Baku->save();

        return Redirect(route('pengolahan'));
    }
}
