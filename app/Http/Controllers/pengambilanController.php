<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Order;
use App\Models\Vendor;
use Illuminate\Http\Request;

class pengambilanController extends Controller
{
    //
    //
    public function index()
    {
        return Barang::all();
    }

    public function create(Request $request)
    {
        $Barang = new Barang;
        $Barang->id_request_order = $request->id_request_order;
        $Barang->tanggal_pengambilan_barang = $request->tanggal_pengambilan_barang;
        $Barang->save();
        return "Pengambilan Barang berhasil dibuat";
    }

    public function update(Request $request, $id)
    {
        $id_request_order = $request->id_request_order;
        $tanggal_pengambilan_barang = $request->tanggal_pengambilan_barang;

        $Barang = Barang::find($id);

        $Barang->id_request_order = $id_request_order;
        $Barang->tanggal_pengambilan_barang = $tanggal_pengambilan_barang;
        $Barang->save();

        return "Pengambilan Barang berhasil di update!";
    }

    public function delete($id)
    {
        $Barang = Barang::find($id);
        $Barang->delete();

        return "Pengambilan Barang berhasil dihapus!";
    }

    public function indexView()
    {
        $data = Barang::all();
        return view('pengambilan barang.pengambilan', compact('data'));
    }

    public function createView()
    {
        $order = Order::all();
        return view('pengambilan barang.create',compact('order'));
    }

    public function createData(Request $request)
    {
        $Barang = new Barang;
        $Barang->id_request_order = $request->id_request_order;
        $Barang->tanggal_pengambilan_barang = $request->tanggal_pengambilan_barang;
        $Barang->save();

        return Redirect(route('pengambilan'));
    }

    public function updateView($id)
    {
        $order = Order::all();
        $data = Barang::find($id);
        $vendor = Vendor::all();
        return view("pengambilan barang.update", compact('data','order','vendor'));
    }

    public function updateData(Request $request, $id)
    {
        $Barang = Barang::find($id);
        $Barang->id_request_order = $request->id_request_order;
        $Barang->tanggal_pengambilan_barang = $request->tanggal_pengambilan_barang;
        $Barang->save();

        return redirect(route('pengambilan'));
    }
}
