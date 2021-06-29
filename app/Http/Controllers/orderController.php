<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Vendor;
use App\Models\Baku;
use Illuminate\Http\Request;

class orderController extends Controller
{
    //
    //
    public function index()
    {
        return Order::all();
    }

    public function create(Request $request)
    {
        $Order = new Order;
        $Order->id_vendor = $request->id_vendor;
        $Order->id_bahan_baku = $request->id_bahan_baku;
        $Order->nama_request = $request->nama_request;
        $Order->jumlah_bahan_baku = $request->jumlah_bahan_baku;
        $Order->harga = $request->harga;
        $Order->save();
        return "Order berhasil dibuat";
    }

    public function update(Request $request, $id)
    {
        $id_vendor = $request->id_vendor;
        $id_bahan_baku = $request->id_bahan_baku;
        $nama_request = $request->nama_request;
        $jumlah_bahan_baku = $request->jumlah_bahan_baku;
        $harga = $request->harga;

        $order = Order::find($id);

        $order->id_vendor = $id_vendor;
        $order->id_bahan_baku = $id_bahan_baku;
        $order->nama_request = $nama_request;
        $order->jumlah_bahan_baku = $jumlah_bahan_baku;
        $order->harga = $harga;
        $order->save();

        return "Order berhasil di update!";
    }

    public function delete($id)
    {
        $order = Order::find($id);
        $order->delete();

        return "Order berhasil dihapus!";
    }

    public function indexView()
    {
        $data = Order::all();
        return view('order baku.order', compact('data'));
    }

    public function createView()
    {
        $vendor = Vendor::all();
        $baku = Baku::all();
        return view('order baku.create',compact('vendor','baku'));
    }

    public function createData(Request $request)
    {
        $Order = new Order;
        $Order->id_vendor = $request->id_vendor;
        $Order->id_bahan_baku = $request->id_bahan_baku;
        $Order->nama_request = $request->nama_request;
        $Order->jumlah_bahan_baku = $request->jumlah_bahan_baku;
        $Order->harga = $request->harga;
        $Order->save();

        return Redirect(route('order'));
    }

    public function updateView($id)
    {
        $data = Order::find($id);
        $vendor = Vendor::all();
        $baku = Baku::all();
        return view("order baku.update", compact('data','vendor','baku'));
    }

    public function updateData(Request $request, $id)
    {
        $Order = Order::find($id);
        $Order->id_vendor = $request->id_vendor;
        $Order->id_bahan_baku = $request->id_bahan_baku;
        $Order->nama_request = $request->nama_request;
        $Order->jumlah_bahan_baku = $request->jumlah_bahan_baku;
        $Order->harga = $request->harga;
        $Order->save();

        return redirect(route('order'));
    }
}
