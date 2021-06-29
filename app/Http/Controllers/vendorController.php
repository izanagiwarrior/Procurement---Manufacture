<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class vendorController extends Controller
{
    //
    public function index(){
        return Vendor::all();
    }

    public function create(Request $request)
    {
        $Vendor = new Vendor;
        $Vendor->nama_vendor = $request->nama_vendor;
        $Vendor->alamat_vendor = $request->alamat_vendor;
        $Vendor->jenis_vendor = $request->jenis_vendor;
        $Vendor->save();
        return "Vendor berhasil dibuat";
    }

    public function update(Request $request, $id)
    {
        $nama_vendor = $request->nama_vendor;
        $alamat_vendor = $request->alamat_vendor;
        $jenis_vendor = $request->jenis_vendor;

        $barang = Vendor::find($id);

        $barang->nama_vendor = $nama_vendor;
        $barang->alamat_vendor = $alamat_vendor;
        $barang->jenis_vendor = $jenis_vendor;
        $barang->save();

        return "Vendor berhasil di update!";
    }

    public function delete($id)
    {
        $transaksi = Vendor::find($id);
        $transaksi->delete();

        return "Vendor berhasil dihapus!";
    }

    public function indexView(){
        $data = Vendor::all();
        return view('vendor.vendor', compact('data'));
    }

    public function createView(){
        return view('vendor.create');
    }

    public function createData(Request $request){
        $Vendor = new Vendor;
        $Vendor->nama_vendor = $request->nama_vendor;
        $Vendor->alamat_vendor = $request->alamat_vendor;
        $Vendor->jenis_vendor = $request->jenis_vendor;
        $Vendor->save();
        
        return Redirect(route('vendor'));
    }

    public function updateView($id)
    {
        $data = Vendor::find($id);
        return view("vendor.update", compact('data'));
    }

    public function updateData(Request $request, $id)
    {
        $Vendor = Vendor::findOrFail($id);
        $Vendor->nama_vendor = $request->nama_vendor;
        $Vendor->alamat_vendor = $request->alamat_vendor;
        $Vendor->jenis_vendor = $request->jenis_vendor;
        $Vendor->save();

        return redirect(route('vendor'));
    }
}
