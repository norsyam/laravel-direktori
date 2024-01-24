<?php

namespace App\Http\Controllers;

use App\Models\Jawatan;
use App\Models\Bahagian;
use App\Models\Personel;
use App\Models\Direktori;
use Illuminate\Http\Request;

class DirektoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        //
        $id_bahagian = $request->id_bahagian;
        $bahagian = Bahagian::find($id_bahagian);
        $bahagians = Bahagian::all();
        $direktoris = Direktori::where('id_bahagian','=',$id_bahagian)->get();
        return view('direktori.index',compact('direktoris','bahagian','bahagians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $id_bahagian = $request->id_bahagian;
        $bahagian = Bahagian::find($id_bahagian);
        $jawatans = Jawatan::all();
        $personels = Personel::all();
        // dd($request->id_bahagian);
        return view('direktori.create',compact('bahagian','jawatans','personels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $direktori = new Direktori();
        $direktori->id_personel = $request->id_personel;
        $direktori->id_bahagian = $request->id_bahagian;
        $direktori->id_jawatan = $request->id_jawatan;
        $direktori->save();
        return redirect('/direktori?id_bahagian='.$request->id_bahagian)->with('status', 'Staff Baru Telah Ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $direktori = Direktori::find($id);
        $jawatans = Jawatan::all();
        $bahagians = Bahagian::all();
        return view('direktori.edit',compact('direktori','jawatans','bahagians'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // dd($request);
        $direktori = Direktori::find($id);
        $direktori->id_jawatan = $request->id_jawatan;
        $direktori->id_bahagian = $request->id_bahagian;
        $direktori->save();
        return redirect('/direktori?id_bahagian='.$request->id_bahagian)->with('status', 'Bahagain Dipinda!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
