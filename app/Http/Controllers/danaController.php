<?php

namespace App\Http\Controllers;

use App\Models\Dana;
use App\Models\Order;
use App\Models\Vendor;
use Illuminate\Http\Request;

class danaController extends Controller
{
    //
    public function index()
    {
        return Dana::all();
    }

    public function create(Request $request)
    {
        $Dana = new Dana;
        $Dana->id_request_order = $request->id_request_order;
        $Dana->tanggal_request = $request->tanggal_request;
        $Dana->save();
        return "Dana berhasil dibuat";
    }

    public function update(Request $request, $id)
    {
        $id_request_order = $request->id_request_order;
        $tanggal_request = $request->tanggal_request;

        $dana = Dana::find($id);

        $dana->id_request_order = $id_request_order;
        $dana->tanggal_request = $tanggal_request;
        $dana->save();

        return "Dana berhasil di update!";
    }

    public function delete($id)
    {
        $dana = Dana::find($id);
        $dana->delete();

        return "Dana berhasil dihapus!";
    }

    public function indexView()
    {
        $data = Dana::all();
        return view('anggaran dana.dana', compact('data'));
    }

    public function createView()
    {
        $order = Order::all();
        return view('anggaran dana.create',compact('order'));
    }

    public function createData(Request $request)
    {
        $Dana = new Dana;
        $Dana->id_request_order = $request->id_request_order;
        $Dana->tanggal_request = $request->tanggal_request;
        $Dana->save();

        return Redirect(route('dana'));
    }

    public function updateView($id)
    {
        $data = Dana::find($id);
        $order = Order::all();
        $vendor = Vendor::all();
        return view("anggaran dana.update", compact('data','order','vendor'));
    }

    public function updateData(Request $request, $id)
    {
        $Dana = Dana::find($id);
        $Dana->id_request_order = $request->id_request_order;
        $Dana->tanggal_request = $request->tanggal_request;
        $Dana->save();

        return redirect(route('dana'));
    }
}
