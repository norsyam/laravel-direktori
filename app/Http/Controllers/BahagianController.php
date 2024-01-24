<?php

namespace App\Http\Controllers;

use App\Models\Bahagian;
use Illuminate\Http\Request;

class BahagianController extends Controller
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
        $bahagians = Bahagian::paginate(5)->withQueryString();
        // dd($bahagians);
        return view('bahagian.index',compact('bahagians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('bahagian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        Bahagian::create([
            'nama_bahagian' => $request->nama_bahagian
        ]);

        return redirect('/bahagian')->with('status', 'Bahagain Baru Telah Ditambah!');
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
        $bahagian = Bahagian::find($id);
        // dd($bahagian);
        return view('bahagian.edit',compact('bahagian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // dd($request);
        $pinda = Bahagian::find($id);
        $pinda->nama_bahagian = $request->nama_bahagian;
        $pinda->save();
        return redirect('/bahagian')->with('status', 'Bahagain Dipinda!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // return $id;
        Bahagian::destroy($id);
        return redirect('/bahagian')->with('status', 'Bahagain Telah dipadam!');
    }
}
