<?php

namespace App\Http\Controllers;

use App\Models\Bahagian;
use App\Models\Direktori;
use Illuminate\Http\Request;

class DirektoriAwamController extends Controller
{
    //
    public function bahagian(Request $request)
    {
        //
        $bahagians = Bahagian::all();
        // dd($bahagians);
        return view('direktori-awam.bahagian',compact('bahagians'));
    }
    public function direktori(Request $request)
    {
        //
        $id_bahagian = $request->id_bahagian;
        $bahagian = Bahagian::find($id_bahagian);
        $bahagians = Bahagian::all();
        $direktoris = Direktori::where('id_bahagian','=',$id_bahagian)->get();
        return view('direktori-awam.direktori',compact('direktoris','bahagian','bahagians'));
    }
}
